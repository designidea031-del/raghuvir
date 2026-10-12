<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use App\Models\PageSeo;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class SitemapController extends Controller
{
    /**
     * Generate and serve real-time dynamic XML Sitemap.
     * Complies with Sitemaps.org 0.9 and Google Image Sitemap 1.1 schemas.
     */
    public function index(): Response
    {
        // 1. Primary Core Static Pages
        $staticRoutes = [
            ['name' => 'home',     'priority' => '1.0', 'changefreq' => 'weekly'],
            ['name' => 'about',    'priority' => '0.8', 'changefreq' => 'monthly'],
            ['name' => 'products', 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['name' => 'blog',     'priority' => '0.8', 'changefreq' => 'daily'],
            ['name' => 'contact',  'priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        // 2. Active Products
        $products = Product::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('updated_at', 'desc')
            ->get(['id', 'slug', 'name', 'image', 'short_description', 'meta_title', 'meta_description', 'updated_at']);

        // 3. Published Blogs
        $blogs = Blog::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get(['id', 'slug', 'title', 'image', 'excerpt', 'meta_title', 'meta_description', 'updated_at', 'published_at']);

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
        $xml .= '        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . "\n";

        // Render Static Pages
        foreach ($staticRoutes as $item) {
            $loc = route($item['name']);
            $pageSeo = PageSeo::where('page_key', $item['name'])->first();

            // Skip if page is set to noindex in SEO settings
            if ($pageSeo && str_contains(strtolower($pageSeo->robots ?? ''), 'noindex')) {
                continue;
            }

            $lastmod = $pageSeo?->updated_at
                ? $pageSeo->updated_at->tz('UTC')->toAtomString()
                : now()->tz('UTC')->toAtomString();

            $xml .= "    <url>\n";
            $xml .= "        <loc>" . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . "</loc>\n";
            $xml .= "        <lastmod>{$lastmod}</lastmod>\n";
            $xml .= "        <changefreq>{$item['changefreq']}</changefreq>\n";
            $xml .= "        <priority>{$item['priority']}</priority>\n";
            $xml .= "    </url>\n";
        }

        // Render Dynamic Product Pages
        foreach ($products as $product) {
            $loc = route('product-details', ['product' => $product->slug]);
            $lastmod = ($product->updated_at ?? now())->tz('UTC')->toAtomString();

            $xml .= "    <url>\n";
            $xml .= "        <loc>" . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . "</loc>\n";
            $xml .= "        <lastmod>{$lastmod}</lastmod>\n";
            $xml .= "        <changefreq>weekly</changefreq>\n";
            $xml .= "        <priority>0.9</priority>\n";

            $imageUrl = $this->resolveImageUrl($product->image);
            if ($imageUrl) {
                $imageTitle = $product->name;
                $caption = !empty($product->short_description)
                    ? Str::limit(trim(strip_tags($product->short_description)), 160)
                    : null;

                $xml .= "        <image:image>\n";
                $xml .= "            <image:loc>" . htmlspecialchars($imageUrl, ENT_XML1, 'UTF-8') . "</image:loc>\n";
                $xml .= "            <image:title>" . htmlspecialchars($imageTitle, ENT_XML1, 'UTF-8') . "</image:title>\n";
                if ($caption) {
                    $xml .= "            <image:caption>" . htmlspecialchars($caption, ENT_XML1, 'UTF-8') . "</image:caption>\n";
                }
                $xml .= "        </image:image>\n";
            }

            $xml .= "    </url>\n";
        }

        // Render Dynamic Blog Pages
        foreach ($blogs as $blog) {
            $loc = route('blog.single', ['slug' => $blog->slug]);
            $dateSource = $blog->updated_at ?? $blog->published_at ?? now();
            $lastmod = $dateSource->tz('UTC')->toAtomString();

            $xml .= "    <url>\n";
            $xml .= "        <loc>" . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . "</loc>\n";
            $xml .= "        <lastmod>{$lastmod}</lastmod>\n";
            $xml .= "        <changefreq>monthly</changefreq>\n";
            $xml .= "        <priority>0.8</priority>\n";

            $imageUrl = $this->resolveImageUrl($blog->image);
            if ($imageUrl) {
                $imageTitle = $blog->title;
                $caption = !empty($blog->excerpt)
                    ? Str::limit(trim(strip_tags($blog->excerpt)), 160)
                    : null;

                $xml .= "        <image:image>\n";
                $xml .= "            <image:loc>" . htmlspecialchars($imageUrl, ENT_XML1, 'UTF-8') . "</image:loc>\n";
                $xml .= "            <image:title>" . htmlspecialchars($imageTitle, ENT_XML1, 'UTF-8') . "</image:title>\n";
                if ($caption) {
                    $xml .= "            <image:caption>" . htmlspecialchars($caption, ENT_XML1, 'UTF-8') . "</image:caption>\n";
                }
                $xml .= "        </image:image>\n";
            }

            $xml .= "    </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
        ]);
    }

    /**
     * Resolve a valid, fully-qualified public URL for a given image path.
     * Prevents false 404s caused by prepending storage/ to public theme assets.
     */
    protected function resolveImageUrl(?string $path): ?string
    {
        if (empty($path)) {
            return null;
        }

        $trimmed = trim($path);

        // 1. External fully qualified URL
        if (str_starts_with($trimmed, 'http://') || str_starts_with($trimmed, 'https://')) {
            return $this->cleanUrl($trimmed);
        }

        // Normalize directory separators
        $clean = ltrim(str_replace('\\', '/', $trimmed), '/');

        // 2. Public theme asset (stored under public/images/)
        if (str_starts_with($clean, 'images/')) {
            return $this->cleanUrl(asset($clean));
        }

        // 3. Stored in public disk (e.g. products/xyz.webp, blogs/xyz.webp)
        $storageClean = preg_replace('#^/?(storage|media)/#', '', $clean);
        return $this->cleanUrl(asset('storage/' . $storageClean));
    }

    /**
     * Ensure URLs have properly encoded spaces and valid characters.
     */
    protected function cleanUrl(string $url): string
    {
        return str_replace(' ', '%20', $url);
    }
}
