<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    /**
     * Get or set a site setting.
     *
     * @param string|null $key
     * @param mixed $default
     * @return mixed
     */
    function setting(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return Setting::getAllSettings();
        }

        return Setting::get($key, $default);
    }
}

if (!function_exists('storage_asset')) {
    /**
     * Get a universally accessible asset URL for files stored in storage/app/public.
     * Uses the /media/ route so that servers with symlink blocks (like Hostinger 403)
     * work seamlessly and without errors.
     */
    function storage_asset(?string $path): string
    {
        if (empty($path)) {
            return '';
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (str_starts_with($path, 'images/')) {
            return asset($path);
        }

        $clean = ltrim(preg_replace('#^/?(storage|media)/#', '', str_replace('\\', '/', $path)), '/');
        return asset('media/' . $clean);
    }
}

if (!function_exists('setting_asset')) {
    /**
     * Get the asset URL for an uploaded setting image, or return fallback asset.
     *
     * @param string $key
     * @param string $fallbackAsset
     * @return string
     */
    function setting_asset(string $key, string $fallbackAsset): string
    {
        $val = setting($key);
        if ($val) {
            return storage_asset($val);
        }

        return asset($fallbackAsset);
    }
}

if (!function_exists('google_map_embed_url')) {
    /**
     * Convert any Google Maps link, shortlink (maps.app.goo.gl), iframe snippet,
     * place name, coordinates, or address into a 100% functional Google Maps iframe embed URL.
     *
     * @param string|null $input
     * @param string|null $fallback
     * @return string
     */
    function google_map_embed_url(?string $input = null, ?string $fallback = null): string
    {
        $defaultFallback = $fallback ?: 'https://maps.google.com/maps?q=Plot%20No%20182,%20Vibrant%20Prime%20Industrial%20Park,%20kadadara,%20GIDC%20Area,%20Dehgam,%20Gandhinagar,%20Gujarat,%20382305&t=&z=14&ie=UTF8&iwloc=&output=embed';

        $input = trim((string)$input);

        if (empty($input)) {
            return $defaultFallback;
        }

        // 1. If user pasted a full <iframe ... src="..." ...> tag, extract src
        if (preg_match('/<iframe[^>]+src=["\']([^"\']+)["\']/i', $input, $matches)) {
            $input = trim(html_entity_decode($matches[1]));
        }

        // 2. If it is already a direct Google Maps embed URL
        if (
            str_contains($input, '/maps/embed') ||
            (str_contains($input, 'maps.google.com') && str_contains($input, 'output=embed'))
        ) {
            return $input;
        }

        // 3. If it's a short link (maps.app.goo.gl or goo.gl/maps), resolve redirects instantly via Location header
        if (str_contains($input, 'maps.app.goo.gl') || str_contains($input, 'goo.gl/maps')) {
            try {
                $response = \Illuminate\Support\Facades\Http::withoutVerifying()
                    ->withoutRedirecting()
                    ->withHeaders([
                        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
                    ])
                    ->timeout(4)
                    ->get($input);

                $redirectUrl = $response->header('Location');
                if (!empty($redirectUrl)) {
                    $input = $redirectUrl;
                } else {
                    $resolved = (string) $response->effectiveUri();
                    if (!empty($resolved) && $resolved !== $input) {
                        $input = $resolved;
                    }
                }
            } catch (\Throwable $e) {
                // If network timeout or offline, continue with regex parsing
            }
        }

        // 4. Extract latitude & longitude if present in URL
        $lat = null;
        $lng = null;
        $placeName = null;
        $placeId = null;

        // Check !3d23.0965117!4d72.7689042 format
        if (preg_match('/!3d([0-9.-]+)!4d([0-9.-]+)/', $input, $coords)) {
            $lat = $coords[1];
            $lng = $coords[2];
        } elseif (preg_match('/@([0-9.-]+),([0-9.-]+)/', $input, $coords)) { // Check @23.0965117,72.7689042 format
            $lat = $coords[1];
            $lng = $coords[2];
        }

        // Check /place/NAME/ format
        if (preg_match('/\/place\/([^@\/?#]+)/', $input, $placeMatches)) {
            $placeName = urldecode(str_replace('+', ' ', $placeMatches[1]));
        }

        // Check !1s0x...:0x... Google Place ID
        if (preg_match('/!1s(0x[0-9a-fA-F]+:0x[0-9a-fA-F]+)/', $input, $idMatches)) {
            $placeId = $idMatches[1];
        }

        // Check if satellite/hybrid view is requested in URL (!1e3 or t=k/h)
        $isSatellite = str_contains($input, '!1e3') || str_contains($input, 't=k') || str_contains($input, 't=h');
        $layerType = $isSatellite ? '!5e1' : '!5e0';

        // 5. If we have a verified Place ID + coordinates, generate the official Google Embed PB URL (with business card and pin)
        if ($placeId && $lat && $lng) {
            $nameParam = $placeName ? ('!2s' . rawurlencode($placeName)) : '';
            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1088.34!2d{$lng}!3d{$lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s" . rawurlencode($placeId) . "{$nameParam}{$layerType}!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin";
        }

        // 6. If we have coordinates only
        if ($lat && $lng) {
            $label = $placeName ? ('+(' . urlencode($placeName) . ')') : '';
            return "https://maps.google.com/maps?q={$lat},{$lng}{$label}&hl=en&z=16&output=embed";
        }

        // 7. If we have place name only
        if ($placeName) {
            return 'https://maps.google.com/maps?q=' . urlencode($placeName) . '&t=&z=16&ie=UTF8&iwloc=&output=embed';
        }

        // 7. Check /search/Query
        if (preg_match('/\/search\/([^@\/?]+)/', $input, $searchMatches)) {
            $searchQuery = urldecode(str_replace('+', ' ', $searchMatches[1]));
            return 'https://maps.google.com/maps?q=' . urlencode($searchQuery) . '&t=&z=16&ie=UTF8&iwloc=&output=embed';
        }

        // 8. If input contains query param q=
        $parsed = parse_url($input);
        if (isset($parsed['query'])) {
            parse_str($parsed['query'], $params);
            if (!empty($params['q'])) {
                return 'https://maps.google.com/maps?q=' . urlencode($params['q']) . '&t=&z=16&ie=UTF8&iwloc=&output=embed';
            }
        }

        // 9. If input is a raw address or plain search string (not a URL)
        if (!str_starts_with($input, 'http://') && !str_starts_with($input, 'https://')) {
            return 'https://maps.google.com/maps?q=' . urlencode($input) . '&t=&z=16&ie=UTF8&iwloc=&output=embed';
        }

        // Fallback: if it's a URL but unrecognized structure, append &output=embed
        if (str_contains($input, 'google.com/maps')) {
            return $input . (str_contains($input, '?') ? '&output=embed' : '?output=embed');
        }

        return $defaultFallback;
    }
}

