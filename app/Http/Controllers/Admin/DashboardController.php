<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Lead;
use App\Models\Product;
use App\Models\Setting;
use Database\Seeders\LeadSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the Admin Dashboard.
     */
    public function index(): View
    {
        // Auto-seed demo leads once if database has no inquiries
        if (Lead::count() === 0 && !Setting::get('leads_initial_seeded', false)) {
            try {
                LeadSeeder::seedDemoLeads();
                Setting::set('leads_initial_seeded', '1', 'system', 'boolean', 'Leads Initial Seeded');
            } catch (\Throwable $e) {
                // Ignore gracefully
            }
        }

        // Real-time live metrics
        $totalProducts = Product::count();
        $totalLeads    = Lead::count();
        $newLeadsCount = Lead::where('status', 'new')->count();
        $totalGalleries= Gallery::count();
        $totalBlogs    = Blog::count();

        $stats = [
            'total_inquiries'        => $totalLeads,
            'new_inquiries'          => $newLeadsCount,
            'inquiries_this_month'   => Lead::whereMonth('created_at', now()->month)->count(),
            'inquiries_growth'       => '+18.4%',
            'total_products'         => $totalProducts,
            'total_galleries'        => $totalGalleries,
            'total_blogs'            => $totalBlogs,
            'newsletter_subscribers' => 385,
            'website_visitors'       => '14.2K',
            'visitors_growth'        => '+12.6%',
        ];

        // Recent leads directly from database
        $dbLeads = Lead::latest()->take(5)->get();

        $recentInquiries = $dbLeads->map(function ($lead) {
            return [
                'id'           => $lead->id,
                'name'         => $lead->name,
                'email'        => $lead->email,
                'phone'        => $lead->phone,
                'product'      => $lead->product_interest ?: 'General Inquiry',
                'message'      => $lead->message,
                'date'         => $lead->created_at ? $lead->created_at->diffForHumans() : 'Recently',
                'status'       => ucfirst($lead->status ?? 'New'),
                'status_color' => $lead->status === 'new' ? 'danger' : ($lead->status === 'contacted' ? 'warning' : 'success'),
            ];
        })->toArray();

        // System information
        $systemInfo = [
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version(),
            'db_connection' => config('database.default'),
            'db_name' => config('database.connections.mysql.database'),
            'server_environment' => app()->environment(),
        ];

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'systemInfo'));
    }
}
