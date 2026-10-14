<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
@php
    // Check if on a dynamic Product Details page or Blog Single page
    $currentProduct = $productModel ?? ($product ?? null);
    $currentBlog = $blog ?? null;

    if ($currentProduct instanceof \App\Models\Product) {
        $seoTitle = $currentProduct->seo_title;
        $seoDescription = $currentProduct->seo_description;
        $seoKeywords = $currentProduct->seo_keywords;
        $seoRobots = $currentProduct->is_active ? 'index, follow' : 'noindex, nofollow';
        $seoCanonical = route('product-details', ['product' => $currentProduct->slug]);
        $ogType = 'product';
        $ogTitle = $seoTitle;
        $ogDescription = $seoDescription;
        $ogImage = $currentProduct->image_url;
        $schemaJson = $currentProduct->schema_json;
    } elseif ($currentBlog instanceof \App\Models\Blog) {
        $seoTitle = $currentBlog->seo_title;
        $seoDescription = $currentBlog->seo_description;
        $seoKeywords = $currentBlog->seo_keywords;
        $seoRobots = $currentBlog->is_published ? 'index, follow' : 'noindex, nofollow';
        $seoCanonical = route('blog.single', ['slug' => $currentBlog->slug]);
        $ogType = 'article';
        $ogTitle = $seoTitle;
        $ogDescription = $seoDescription;
        $ogImage = $currentBlog->image_url;
        $schemaJson = $currentBlog->schema_json;
    } else {
        $pageSeo = \App\Models\PageSeo::forCurrentRoute();
        $seoTitle = $pageSeo?->meta_title ?: setting('site_title', 'Raghuvir Atta - 100% Pure Sharbati Whole Wheat Flour');
        $seoDescription = $pageSeo?->meta_description ?: setting('meta_description', 'Experience pure, traditional stone-ground chakki fresh atta from Raghuvir.');
        $seoKeywords = $pageSeo?->meta_keywords ?: setting('meta_keywords', 'raghuvir atta, chakki fresh atta, pure wheat flour');
        $seoRobots = $pageSeo?->robots ?: 'index, follow';
        $seoCanonical = $pageSeo?->canonical_url ?: url()->current();
        $ogType = 'website';
        $ogTitle = $pageSeo?->og_title ?: $seoTitle;
        $ogDescription = $pageSeo?->og_description ?: $seoDescription;
        $ogImage = $pageSeo ? $pageSeo->og_image_url : asset(setting('header_logo', 'images/Raghuvir Logo.png'));
        $schemaJson = $pageSeo?->generated_schema_json;
    }
@endphp
	<meta name="description" content="@yield('meta_description', $seoDescription)">
	<meta name="keywords" content="@yield('meta_keywords', $seoKeywords)">
	<meta name="robots" content="{{ $seoRobots }}">
	<meta name="author" content="{{ setting('site_title', 'Raghuvir Atta') }}">
	<link rel="canonical" href="{{ $seoCanonical }}">

	<!-- Search Engine & Webmaster Verifications -->
	@if(setting('google_search_console_code'))
		<meta name="google-site-verification" content="{{ setting('google_search_console_code') }}">
	@endif
	@if(setting('bing_webmaster_code'))
		<meta name="msvalidate.01" content="{{ setting('bing_webmaster_code') }}">
	@endif
	@if(setting('pinterest_verify_code'))
		<meta name="p:domain_verify" content="{{ setting('pinterest_verify_code') }}">
	@endif
	@if(setting('yandex_verify_code'))
		<meta name="yandex-verification" content="{{ setting('yandex_verify_code') }}">
	@endif

	<!-- Open Graph / Facebook / WhatsApp -->
	<meta property="og:type" content="{{ $ogType ?? 'website' }}">
	<meta property="og:site_name" content="{{ setting('site_title', 'Raghuvir Atta') }}">
	<meta property="og:url" content="{{ $seoCanonical }}">
	<meta property="og:title" content="@yield('og_title', $ogTitle)">
	<meta property="og:description" content="@yield('og_description', $ogDescription)">
	<meta property="og:image" content="@yield('og_image', $ogImage)">

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="{{ $seoCanonical }}">
	<meta name="twitter:title" content="@yield('twitter_title', $ogTitle)">
	<meta name="twitter:description" content="@yield('twitter_description', $ogDescription)">
	<meta name="twitter:image" content="@yield('twitter_image', $ogImage)">

@hasSection('schema')
	@yield('schema')
@elseif(!empty($schemaJson))
	<!-- JSON-LD Structured Data Schema -->
	<script type="application/ld+json">
	{!! $schemaJson !!}
	</script>
@endif

	<!-- Page Title -->
    <title>@yield('title', $seoTitle)</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ setting_asset('site_favicon', 'images/Raghuvir Favicon.png') }}">

	<!-- Resource Hints & Critical Asset Preload -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://cdnjs.cloudflare.com">
	<link rel="dns-prefetch" href="https://fonts.googleapis.com">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
	<link rel="preload" as="image" href="{{ asset('images/home_hero.webp') }}" type="image/webp" fetchpriority="high">

	<!-- Critical Above-the-Fold & Preloader CSS -->
	<style>
		:root {
			--primary-color: #2C2C2C;
			--secondary-color: #F8F6EF;
			--bg-color: #FFFFFF;
			--text-color: #767676;
			--accent-color: #E67E22;
			--white-color: #FFFFFF;
			--divider-color: #2C2C2C1A;
			--dark-divider-color: #FFFFFF1A;
			--default-font: "Bricolage Grotesque", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
		}
		*, *::before, *::after {
			box-sizing: border-box;
		}
		html, body {
			margin: 0;
			padding: 0;
			width: 100%;
			overflow-x: clip;
			font-family: var(--default-font);
			background-color: var(--secondary-color);
			color: var(--text-color);
			font-size: 16px;
			line-height: 1.6;
		}
		/* Preloader and Inquiry Modal disabled on load for instant clean page loading without flashing popups */
		.preloader {
			display: none !important;
			visibility: hidden !important;
			opacity: 0 !important;
			pointer-events: none !important;
		}
		.inq-backdrop {
			display: none;
		}
		i[class*="fa-"], .fa-solid, .fa-regular, .fa-brands {
			display: inline-block;
			width: 1em;
			min-height: 1em;
			text-align: center;
			line-height: 1;
		}
		.hero-title-entrance {
			animation: heroTitleFadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
			will-change: opacity, transform;
		}
		@keyframes heroTitleFadeIn {
			0% { opacity: 0; transform: translateY(16px); }
			100% { opacity: 1; transform: translateY(0); }
		}
		.logo-container {
			width: 170px;
			height: 170px;
			animation: breathe 4s ease-in-out infinite;
		}
		.logo-container svg {
			width: 100%;
			height: 100%;
			overflow: visible;
		}
		.logo-container .leaf {
			transform: scale(0);
			opacity: 0;
			transform-origin: 127px 147px;
		}
		.logo-container .left-leaf {
			animation: loopBloom 4s infinite;
			animation-delay: 0s;
		}
		.logo-container .right-leaf {
			animation: loopBloom 4s infinite;
			animation-delay: 0.2s;
		}
		.logo-container .top-leaf {
			animation: loopBloom 4s infinite;
			animation-delay: 0.5s;
		}
		@keyframes loopBloom {
			0% { transform: scale(0); opacity: 0; animation-timing-function: cubic-bezier(0.34, 1.56, 0.64, 1); }
			10% { transform: scale(1); opacity: 1; animation-timing-function: linear; }
			75% { transform: scale(1); opacity: 1; animation-timing-function: ease-in; }
			85%, 100% { transform: scale(0); opacity: 0; }
		}
		@keyframes breathe {
			0%, 100% { transform: scale(1); }
			40% { transform: scale(1.025); }
		}
		.bg-section {
			width: 100%;
			max-width: 1880px;
			background: var(--secondary-color);
			border-radius: 12px;
			margin: 0 auto;
		}
		.dark-section {
			background-color: var(--primary-color);
			background-image: url('{{ asset("images/dark-section-bg-shape.webp") }}');
			background-repeat: no-repeat;
			background-position: center center;
			background-size: cover;
		}
		.hero {
			position: relative;
			background: url('{{ asset("images/home_hero.webp") }}') no-repeat;
			background-position: right 30%;
			background-size: cover;
			margin-top: 20px;
			overflow: hidden;
		}

		/* ── Premium Mobile Hamburger Button & SlickNav Menu ─────────── */
		.responsive-menu {
			position: relative;
			z-index: 9999;
		}

		.slicknav_menu {
			background: transparent !important;
			padding: 0 !important;
			position: relative !important;
		}

		/* Vibrant Raghuvir Brand Hamburger Button */
		.navbar-toggle .slicknav_btn,
		.slicknav_btn,
		.navbar-toggle .slicknav_btn.slicknav_open,
		.slicknav_btn.slicknav_open {
			background: #EF801C !important;
			background: linear-gradient(135deg, #EF801C 0%, #D86B0E 100%) !important;
			border: 1.5px solid rgba(255, 255, 255, 0.45) !important;
			width: 44px !important;
			height: 44px !important;
			border-radius: 10px !important;
			box-shadow: 0 4px 14px rgba(239, 128, 28, 0.45) !important;
			display: flex !important;
			align-items: center !important;
			justify-content: center !important;
			padding: 0 !important;
			margin: 0 !important;
			cursor: pointer !important;
			transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1) !important;
			text-decoration: none !important;
			outline: none !important;
		}

		.navbar-toggle .slicknav_btn:hover,
		.slicknav_btn:hover {
			background: linear-gradient(135deg, #FF8F2D 0%, #E07010 100%) !important;
			box-shadow: 0 6px 20px rgba(239, 128, 28, 0.6) !important;
			transform: scale(1.05) !important;
		}

		.slicknav_btn .slicknav_menutxt {
			display: none !important;
		}

		.slicknav_icon,
		.navbar-toggle .slicknav_icon {
			width: 22px !important;
			height: 16px !important;
			margin: 0 !important;
			position: relative !important;
			display: block !important;
			float: none !important;
		}

		.slicknav_icon:before,
		.navbar-toggle .slicknav_icon:before {
			display: none !important;
			content: none !important;
		}

		/* 3 Clean Pure White Hamburger Bars */
		.slicknav_icon .slicknav_icon-bar,
		.navbar-toggle .slicknav_icon .slicknav_icon-bar {
			display: block !important;
			position: absolute !important;
			left: 0 !important;
			width: 22px !important;
			height: 2.5px !important;
			background-color: #FFFFFF !important;
			border-radius: 4px !important;
			margin: 0 !important;
			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25) !important;
			transition: transform 0.25s ease-in-out, opacity 0.2s ease-in-out, top 0.25s ease-in-out !important;
			transform-origin: 50% 50% !important;
		}

		/* 3 Clean Centered Bars when CLOSED */
		.slicknav_icon span.slicknav_icon-bar:nth-child(1),
		.navbar-toggle .slicknav_icon span.slicknav_icon-bar:nth-child(1) {
			top: 0px !important;
			transform: none !important;
		}

		.slicknav_icon span.slicknav_icon-bar:nth-child(2),
		.navbar-toggle .slicknav_icon span.slicknav_icon-bar:nth-child(2) {
			top: 6.75px !important;
			opacity: 1 !important;
			transform: none !important;
		}

		.slicknav_icon span.slicknav_icon-bar:nth-child(3),
		.navbar-toggle .slicknav_icon span.slicknav_icon-bar:nth-child(3) {
			top: 13.5px !important;
			transform: none !important;
		}

		/* Animated Crisp White Centered 'X' When Open */
		.slicknav_btn.slicknav_open .slicknav_icon span.slicknav_icon-bar:nth-child(1),
		.navbar-toggle .slicknav_btn.slicknav_open .slicknav_icon span.slicknav_icon-bar:nth-child(1) {
			top: 6.75px !important;
			transform: rotate(45deg) !important;
			background-color: #FFFFFF !important;
		}

		.slicknav_btn.slicknav_open .slicknav_icon span.slicknav_icon-bar:nth-child(2),
		.navbar-toggle .slicknav_btn.slicknav_open .slicknav_icon span.slicknav_icon-bar:nth-child(2) {
			opacity: 0 !important;
			transform: scaleX(0) !important;
		}

		.slicknav_btn.slicknav_open .slicknav_icon span.slicknav_icon-bar:nth-child(3),
		.navbar-toggle .slicknav_btn.slicknav_open .slicknav_icon span.slicknav_icon-bar:nth-child(3) {
			top: 6.75px !important;
			transform: rotate(-45deg) !important;
			background-color: #FFFFFF !important;
		}

		/* Mobile Navigation Dropdown Box */
		.slicknav_menu .mega-menu-wrapper {
			display: none !important;
			visibility: hidden !important;
			height: 0 !important;
			overflow: hidden !important;
		}

		.slicknav_nav {
			background: #14171a !important;
			background-color: #14171a !important;
			border-radius: 16px !important;
			border: 1px solid rgba(255, 255, 255, 0.12) !important;
			border-top: 3px solid #EF801C !important;
			box-shadow: 0 20px 50px rgba(0, 0, 0, 0.95) !important;
			margin: 12px 0 0 0 !important;
			padding: 10px 0 !important;
			list-style: none !important;
			overflow: hidden !important;
			clear: both !important;
			opacity: 1 !important;
		}

		/* Pure White, Readable Menu Item Links */
		.slicknav_nav li {
			display: block !important;
			margin: 0 !important;
			padding: 0 !important;
			background: #14171a !important;
			background-color: #14171a !important;
		}

		.slicknav_nav .slicknav_row,
		.slicknav_nav > li > a {
			color: #FFFFFF !important;
			font-size: 16px !important;
			font-weight: 600 !important;
			font-family: var(--default-font) !important;
			padding: 14px 22px !important;
			display: flex !important;
			align-items: center !important;
			justify-content: space-between !important;
			text-decoration: none !important;
			border-bottom: 1px solid rgba(255, 255, 255, 0.07) !important;
			border-radius: 0 !important;
			margin: 0 !important;
			line-height: 1.4 !important;
			background: #14171a !important;
			background-color: #14171a !important;
			transition: all 0.2s ease !important;
			position: relative !important;
		}

		.slicknav_nav li:last-child > a,
		.slicknav_nav li:last-child > .slicknav_row {
			border-bottom: none !important;
		}

		.slicknav_nav a:hover,
		.slicknav_nav a:focus,
		.slicknav_nav .slicknav_row:hover {
			background: #1e2226 !important;
			background-color: #1e2226 !important;
			color: #EF801C !important;
			padding-left: 26px !important;
		}

		.slicknav_nav .slicknav_open > .slicknav_row,
		.slicknav_nav .slicknav_open > a {
			background: #1b1e22 !important;
			background-color: #1b1e22 !important;
			color: #EF801C !important;
		}

		/* Submenu Styling */
		.slicknav_nav ul,
		.slicknav_nav .mobile-sub-only {
			background: #0b0d0e !important;
			background-color: #0b0d0e !important;
			margin: 6px 14px 10px 14px !important;
			padding: 6px 0 !important;
			list-style: none !important;
			border-radius: 12px !important;
			border: 1px solid rgba(255, 255, 255, 0.08) !important;
			border-left: 3px solid #EF801C !important;
			box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.5) !important;
		}

		.slicknav_nav ul li,
		.slicknav_nav .mobile-sub-only li {
			background: transparent !important;
			background-color: transparent !important;
		}

		.slicknav_nav ul li a,
		.slicknav_nav .mobile-sub-only li a {
			color: rgba(255, 255, 255, 0.88) !important;
			font-size: 14.5px !important;
			font-weight: 500 !important;
			padding: 12px 18px 12px 20px !important;
			display: flex !important;
			align-items: center !important;
			gap: 12px !important;
			border-bottom: 1px solid rgba(255, 255, 255, 0.04) !important;
			background: transparent !important;
			transition: all 0.2s ease !important;
			text-decoration: none !important;
		}

		.slicknav_nav ul li:last-child a,
		.slicknav_nav .mobile-sub-only li:last-child a {
			border-bottom: none !important;
		}

		.slicknav_nav ul li a::before,
		.slicknav_nav .mobile-sub-only li a::before {
			content: '' !important;
			display: inline-block !important;
			width: 6px !important;
			height: 6px !important;
			border-radius: 50% !important;
			background: #EF801C !important;
			opacity: 0.8 !important;
			transition: all 0.2s ease !important;
			flex-shrink: 0 !important;
		}

		.slicknav_nav ul li a:hover,
		.slicknav_nav ul li a:focus,
		.slicknav_nav .mobile-sub-only li a:hover,
		.slicknav_nav .mobile-sub-only li a:focus {
			color: #FFA44D !important;
			background: rgba(239, 128, 28, 0.12) !important;
			padding-left: 24px !important;
		}

		.slicknav_nav ul li a:hover::before,
		.slicknav_nav .mobile-sub-only li a:hover::before {
			transform: scale(1.4) !important;
			background: #FFA44D !important;
			opacity: 1 !important;
		}

		/* Dropdown Arrow Badge - No text glyph leak, single clean chevron */
		.slicknav_nav .slicknav_arrow {
			font-size: 0 !important;
			line-height: 0 !important;
			color: transparent !important;
			display: inline-flex !important;
			align-items: center !important;
			justify-content: center !important;
			width: 28px !important;
			height: 28px !important;
			border-radius: 8px !important;
			background: rgba(239, 128, 28, 0.15) !important;
			position: absolute !important;
			right: 18px !important;
			top: 50% !important;
			transform: translateY(-50%) !important;
			transition: all 0.25s ease !important;
			margin: 0 !important;
			text-indent: -9999px !important;
			overflow: visible !important;
		}

		.slicknav_nav .slicknav_arrow:after {
			content: '\f107' !important;
			font-family: 'Font Awesome 6 Free', 'FontAwesome' !important;
			font-weight: 900 !important;
			font-size: 13px !important;
			color: #EF801C !important;
			display: block !important;
			text-indent: 0 !important;
			line-height: 1 !important;
			transition: transform 0.25s ease !important;
		}

		.slicknav_nav .slicknav_open > .slicknav_item .slicknav_arrow,
		.slicknav_nav .slicknav_open > a .slicknav_arrow,
		.slicknav_nav .slicknav_open > .slicknav_row .slicknav_arrow {
			background: #EF801C !important;
		}

		.slicknav_nav .slicknav_open > .slicknav_item .slicknav_arrow:after,
		.slicknav_nav .slicknav_open > a .slicknav_arrow:after,
		.slicknav_nav .slicknav_open > .slicknav_row .slicknav_arrow:after {
			transform: rotate(180deg) !important;
			color: #FFFFFF !important;
		}

		/* Disable custom cursor on mobile touch */
		@media (max-width: 991px), (pointer: coarse) {
			.cb-cursor {
				display: none !important;
				opacity: 0 !important;
				visibility: hidden !important;
				pointer-events: none !important;
			}
		}
	</style>

	<!-- Google Fonts (Non-blocking with display=swap) -->
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..800&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..800&amp;display=swap" media="print" onload="this.media='all'">

	<!-- Core Layout Stylesheets (Synchronous to eliminate Cumulative Layout Shift) -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}?v={{ file_exists(public_path('css/custom.css')) ? filemtime(public_path('css/custom.css')) : time() }}" rel="stylesheet">
	<link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" media="print" onload="this.media='screen'">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
	<link href="{{ asset('css/mousecursor.css') }}" rel="stylesheet" media="print" onload="this.media='all'">

	<noscript>
		<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&amp;display=swap" rel="stylesheet">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
		<link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
		<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('css/mousecursor.css') }}" rel="stylesheet">
	</noscript>

	@stack('styles')

	<!-- Google Analytics 4 (GA4) - Deferred on load -->
	@if(setting('ga4_measurement_id') && setting('ga4_enabled', true))
		<script>
		window.addEventListener('load', function() {
			var s = document.createElement('script');
			s.src = 'https://www.googletagmanager.com/gtag/js?id={{ setting('ga4_measurement_id') }}';
			s.async = true;
			document.head.appendChild(s);
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', '{{ setting('ga4_measurement_id') }}'{{ setting('ga4_anonymize_ip') ? ", { 'anonymize_ip': true }" : "" }});
		});
		</script>
	@endif

	<!-- Google Tag Manager (GTM) - Deferred on load -->
	@if(setting('gtm_container_id') && setting('gtm_enabled', true))
		<script>
		window.addEventListener('load', function() {
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','{{ setting('gtm_container_id') }}');
		});
		</script>
	@endif

	<!-- Meta / Facebook Pixel Code - Deferred on load -->
	@if(setting('meta_pixel_id') && setting('meta_pixel_enabled', true))
		<script>
		window.addEventListener('load', function() {
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '{{ setting('meta_pixel_id') }}');
			fbq('track', 'PageView');
		});
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id={{ setting('meta_pixel_id') }}&ev=PageView&noscript=1"
		/></noscript>
	@endif

	@if(setting('custom_header_scripts'))
		{!! setting('custom_header_scripts') !!}
	@endif
</head>

<body>
	@if(setting('gtm_container_id') && setting('gtm_enabled', true))
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ setting('gtm_container_id') }}"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	@endif





    <!-- Header Start -->
    @include('partials.header')
	<!-- Header End -->

    <main id="main-content">
        @yield('content')
    </main>

    <!-- Main Footer Start -->
    @hasSection('footer')
        @yield('footer')
    @else
        @include('partials.footer')
    @endif
    <!-- Main Footer End -->
    
    <!-- Jquery Library File -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}" defer></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <!-- Validator js file -->
    <script src="{{ asset('js/validator.min.js') }}" defer></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('js/jquery.slicknav.js') }}" defer></script>
    <!-- Swiper js file -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
    <!-- Counter js file -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}" defer></script>
    <!-- Magnific js file -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <!-- Parallax js -->
    <script src="{{ asset('js/parallaxie.js') }}" defer></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('js/gsap.min.js') }}" defer></script>
    <script src="{{ asset('js/magiccursor.js') }}" defer></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('js/SplitText.min.js') }}" defer></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}" defer></script>
    <!-- Wow js file -->
    <script src="{{ asset('js/wow.min.js') }}" defer></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('js/function.js') }}?v={{ file_exists(public_path('js/function.js')) ? filemtime(public_path('js/function.js')) : time() }}" defer></script>
    <!-- Scroll To Top Button -->
    <a href="#top" id="scroll-to-top" class="scroll-to-top" aria-label="Scroll to top" style="
        position: fixed;
        bottom: 98px;
        right: 30px;
        width: 46px;
        height: 46px;
        background-color: var(--accent-color);
        color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
        text-decoration: none;
    ">
        <i class="fa-solid fa-chevron-up"></i>
    </a>

    <style>
        .scroll-to-top:hover {
            background-color: var(--primary-color) !important;
            color: #ffffff !important;
            transform: translateY(-5px);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollTopBtn = document.getElementById('scroll-to-top');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollTopBtn.style.opacity = '1';
                    scrollTopBtn.style.visibility = 'visible';
                } else {
                    scrollTopBtn.style.opacity = '0';
                    scrollTopBtn.style.visibility = 'hidden';
                }
            });
        });
    </script>

{{-- ════════════════════════════════════════════════════════════════
     Product Inquiry Popup Modal — globally available on every page
     ════════════════════════════════════════════════════════════════ --}}
<div id="inquiryModal" class="inq-backdrop" style="display: none;" onclick="handleInquiryBackdropClick(event)" role="dialog" aria-modal="true" aria-labelledby="inqModalTitle">
    <div class="inq-dialog">

        {{-- Close Button --}}
        <button type="button" class="inq-close-btn" onclick="closeInquiryModal()" aria-label="Close">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>

        {{-- Header --}}
        <div class="inq-header">
            <div class="inq-header-icon">
                <i class="fa-solid fa-paper-plane"></i>
            </div>
            <div>
                <h2 class="inq-title" id="inqModalTitle">Request an Inquiry</h2>
                <p class="inq-subtitle" id="inq-product-label">Fill in the details and we'll get back to you shortly.</p>
            </div>
        </div>

        {{-- Pack Size Selector --}}
        <div class="inq-pack-size-section" id="inq-pack-size-section" style="display:none;">
            <label class="inq-label" style="margin-bottom: 6px;">Select Pack Size:</label>
            <div class="inq-size-pills" id="inq-size-pills"></div>
        </div>

        {{-- Form --}}
        <form id="inquiryForm" class="inq-form" onsubmit="submitInquiryForm(event)">
            @csrf
            {{-- Anti-Spam Bot Honeypot --}}
            <div style="display:none !important; visibility:hidden !important; opacity:0 !important; position:absolute !important; left:-9999px !important;" aria-hidden="true">
                <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
            </div>
            <input type="hidden" name="product_interest" id="inq-product">
            <input type="hidden" name="quantity"         id="inq-size">

            <div class="inq-row">
                <div class="inq-field">
                    <label class="inq-label" for="inq-name">Full Name <span class="inq-req">*</span></label>
                    <input type="text" id="inq-name" name="name" class="inq-input" placeholder="Your full name" required autocomplete="name">
                </div>
                <div class="inq-field">
                    <label class="inq-label" for="inq-phone">Phone Number <span class="inq-req">*</span></label>
                    <input type="tel" id="inq-phone" name="phone" class="inq-input" placeholder="+91 XXXXX XXXXX" required autocomplete="tel">
                </div>
            </div>

            <div class="inq-field">
                <label class="inq-label" for="inq-email">Email Address <span style="font-weight:400; color:#94a3b8; font-size:0.75rem;">(optional)</span></label>
                <input type="email" id="inq-email" name="email" class="inq-input" placeholder="you@example.com" autocomplete="email">
            </div>

            <div class="inq-field">
                <label class="inq-label" for="inq-message">Message <span style="font-weight:400; color:#94a3b8; font-size:0.75rem;">(optional)</span></label>
                <textarea id="inq-message" name="message" class="inq-input inq-textarea" rows="3" placeholder="Any additional details or questions…"></textarea>
            </div>

            {{-- Error area --}}
            <div class="inq-error-box" id="inq-error-box" style="display:none;"></div>

            <button type="submit" class="inq-submit-btn" id="inq-submit-btn">
                <span id="inq-btn-text"><i class="fa-solid fa-paper-plane" style="margin-right:8px;"></i>Send Inquiry</span>
                <span id="inq-btn-loader" style="display:none;">
                    <svg class="inq-spinner" viewBox="0 0 50 50"><circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5"/></svg>
                    Sending…
                </span>
            </button>
        </form>

        {{-- Success State --}}
        <div id="inq-success" class="inq-success" style="display:none;">
            <div class="inq-success-icon">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <h3 class="inq-success-title">Inquiry Sent!</h3>
            <p class="inq-success-desc">Thank you! We've received your inquiry and will contact you shortly.</p>
            <button type="button" class="inq-close-success-btn" onclick="closeInquiryModal()">Close</button>
        </div>

    </div>
</div>

<style>
/* ── Inquiry Modal ─────────────────────────────────────────────────────────── */
.inq-backdrop {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(10, 18, 36, 0.55);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.25s ease, visibility 0.25s ease;
}
.inq-backdrop.inq-open {
    display: flex !important;
    opacity: 1;
    visibility: visible;
}
.inq-dialog {
    position: relative;
    background: #ffffff;
    border-radius: 20px;
    width: 100%;
    max-width: 520px;
    padding: 32px 32px 28px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.18), 0 8px 20px rgba(0,0,0,0.1);
    transform: translateY(20px) scale(0.97);
    transition: transform 0.3s cubic-bezier(.34,1.56,.64,1);
}
.inq-backdrop.inq-open .inq-dialog {
    transform: translateY(0) scale(1);
}
.inq-close-btn {
    position: absolute;
    top: 16px; right: 16px;
    width: 34px; height: 34px;
    border-radius: 50%;
    background: #f1f5f9;
    border: none;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    color: #64748b;
    transition: background 0.2s, color 0.2s;
}
.inq-close-btn:hover { background: #e2e8f0; color: #1e293b; }

/* Header */
.inq-header {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-bottom: 24px;
}
.inq-header-icon {
    width: 48px; height: 48px;
    border-radius: 14px;
    background: linear-gradient(135deg, #EF801C 0%, #f97316 100%);
    color: #fff;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
    box-shadow: 0 6px 16px rgba(239,128,28,0.35);
}
.inq-title {
    font-size: 1.25rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 3px;
    line-height: 1.25;
}
.inq-subtitle {
    font-size: 0.82rem;
    color: #64748b;
    margin: 0;
    font-weight: 500;
}

/* Form */
.inq-form { display: flex; flex-direction: column; gap: 16px; }
.inq-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.inq-field { display: flex; flex-direction: column; gap: 6px; }
.inq-label {
    font-size: 0.82rem;
    font-weight: 700;
    color: #1e293b;
}
.inq-req { color: #ef4444; }
.inq-input {
    width: 100%;
    padding: 11px 14px;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    font-size: 0.88rem;
    color: #1e293b;
    background: #f8fafc;
    font-family: inherit;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    outline: none;
    box-sizing: border-box;
}
.inq-input:focus {
    border-color: #EF801C;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(239,128,28,0.12);
}
.inq-textarea { resize: vertical; min-height: 80px; }

/* Pack Size Picker */
.inq-pack-size-section {
    margin-bottom: 8px;
}
.inq-size-pills {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}
.inq-size-pill {
    padding: 7px 20px;
    font-size: 0.85rem;
    font-weight: 600;
    border: 2px solid #e2e8f0;
    background: #ffffff;
    color: #334155;
    border-radius: 999px;
    cursor: pointer;
    transition: all 0.2s ease;
    font-family: inherit;
    line-height: 1.3;
}
.inq-size-pill:hover {
    border-color: #EF801C;
    color: #EF801C;
}
.inq-size-pill.active {
    background: #EF801C;
    border-color: #EF801C;
    color: #ffffff;
    box-shadow: 0 2px 8px rgba(239,128,28,0.3);
}

/* Error */
.inq-error-box {
    background: #fef2f2;
    border: 1px solid #fecaca;
    border-radius: 10px;
    padding: 10px 14px;
    font-size: 0.82rem;
    color: #b91c1c;
}

/* Submit */
.inq-submit-btn {
    width: 100%;
    padding: 14px 20px;
    background: linear-gradient(135deg, #EF801C 0%, #f97316 100%);
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 700;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center; gap: 6px;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 6px 20px rgba(239,128,28,0.35);
    margin-top: 4px;
}
.inq-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(239,128,28,0.45);
}
.inq-submit-btn:active { transform: translateY(0); }
.inq-submit-btn:disabled { opacity: 0.65; cursor: not-allowed; transform: none; }

/* Spinner */
.inq-spinner {
    width: 18px; height: 18px;
    animation: inq-spin 0.9s linear infinite;
    stroke-dasharray: 80;
    stroke-dashoffset: 60;
}
@keyframes inq-spin { to { transform: rotate(360deg); } }

/* Success */
.inq-success {
    display: flex; flex-direction: column; align-items: center;
    gap: 10px; text-align: center; padding: 20px 0 8px;
}
.inq-success-icon {
    width: 72px; height: 72px;
    border-radius: 50%;
    background: #d1fae5;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 6px;
}
.inq-success-title {
    font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0;
}
.inq-success-desc {
    font-size: 0.88rem; color: #475569; margin: 0; line-height: 1.55;
}
.inq-close-success-btn {
    margin-top: 10px;
    padding: 12px 36px;
    background: linear-gradient(135deg, #EF801C 0%, #f97316 100%);
    color: #fff; border: none; border-radius: 12px;
    font-size: 0.95rem; font-weight: 700; cursor: pointer;
    box-shadow: 0 6px 18px rgba(239,128,28,0.3);
    transition: transform 0.2s;
}
.inq-close-success-btn:hover { transform: translateY(-2px); }

/* Mobile */
@media (max-width: 560px) {
    .inq-dialog { padding: 24px 20px 22px; border-radius: 16px; }
    .inq-row { grid-template-columns: 1fr; }
    .inq-title { font-size: 1.1rem; }
}
</style>

<script>
(function () {
    /* Open / close helpers */
    /* Helper: update subtitle & message when pack size changes */
    function updateInqSizeContext(product, size) {
        document.getElementById('inq-size').value = size;
        document.getElementById('inq-product-label').textContent =
            product ? (product + (size ? ' \u2014 ' + size : '')) : 'Fill in the details and we\u2019ll get back to you shortly.';
        var msgEl = document.getElementById('inq-message');
        if (msgEl && product) {
            msgEl.value = 'Hello Raghuvir Atta, I am interested in inquiring about ' + product + (size ? ' (' + size + ')' : '') + '. Please provide more details.';
        }
    }

    /* Build pack-size pills inside the modal */
    function buildSizePills(sizesStr, activeSize, product) {
        var section = document.getElementById('inq-pack-size-section');
        var container = document.getElementById('inq-size-pills');
        container.innerHTML = '';
        if (!sizesStr) { section.style.display = 'none'; return; }
        var sizes = sizesStr.split(',').map(function(s) { return s.trim(); }).filter(Boolean);
        if (sizes.length === 0) { section.style.display = 'none'; return; }
        section.style.display = 'block';
        sizes.forEach(function(sz) {
            var pill = document.createElement('button');
            pill.type = 'button';
            pill.className = 'inq-size-pill' + (sz === activeSize ? ' active' : '');
            pill.textContent = sz;
            pill.addEventListener('click', function() {
                container.querySelectorAll('.inq-size-pill').forEach(function(p) { p.classList.remove('active'); });
                pill.classList.add('active');
                updateInqSizeContext(product, sz);
            });
            container.appendChild(pill);
        });
    }

    window.openInquiryModal = function (btn) {
        var product   = btn ? (btn.getAttribute('data-product') || '') : '';
        var size      = btn ? (btn.getAttribute('data-size')    || '') : '';
        var sizesAttr = btn ? (btn.getAttribute('data-sizes')   || '') : '';
        document.getElementById('inq-product').value = product;
        document.getElementById('inq-size').value    = size;
        document.getElementById('inq-product-label').textContent =
            product ? (product + (size ? ' \u2014 ' + size : '')) : 'Fill in the details and we\u2019ll get back to you shortly.';

        // Build pack-size pills
        buildSizePills(sizesAttr, size, product);

        // Reset form state
        var modal = document.getElementById('inquiryModal');
        document.getElementById('inquiryForm').style.display  = 'flex';
        document.getElementById('inq-success').style.display  = 'none';
        document.getElementById('inq-error-box').style.display = 'none';
        document.getElementById('inquiryForm').reset();
        // Restore hidden fields after reset
        document.getElementById('inq-product').value = product;
        document.getElementById('inq-size').value    = size;
        // Auto-fill message with product + size (or leave blank if requested)
        var msgEl = document.getElementById('inq-message');
        if (msgEl) {
            var isBlank = btn && (btn.getAttribute('data-blank-message') === 'true' || btn.getAttribute('data-message') === '');
            if (isBlank) {
                msgEl.value = '';
            } else if (btn && btn.getAttribute('data-message')) {
                msgEl.value = btn.getAttribute('data-message');
            } else if (product) {
                msgEl.value = 'Hello Raghuvir Atta, I am interested in inquiring about ' + product + (size ? ' (' + size + ')' : '') + '. Please provide more details.';
            } else {
                msgEl.value = '';
            }
        }
        modal.style.display = 'flex';
        void modal.offsetWidth;
        modal.classList.add('inq-open');
        document.body.style.overflow = 'hidden';
        setTimeout(function() { document.getElementById('inq-name').focus(); }, 300);
    };

    window.closeInquiryModal = function () {
        var modal = document.getElementById('inquiryModal');
        if (modal) {
            modal.classList.remove('inq-open');
            setTimeout(function() {
                if (!modal.classList.contains('inq-open')) {
                    modal.style.display = 'none';
                }
            }, 260);
        }
        document.body.style.overflow = '';
    };

    window.handleInquiryBackdropClick = function (e) {
        if (e.target === document.getElementById('inquiryModal')) {
            closeInquiryModal();
        }
    };

    /* ESC key closes modal */
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') { closeInquiryModal(); }
    });

    /* AJAX form submit */
    window.submitInquiryForm = function (e) {
        e.preventDefault();
        const form    = document.getElementById('inquiryForm');
        const submitBtn = document.getElementById('inq-submit-btn');
        const btnText   = document.getElementById('inq-btn-text');
        const btnLoader = document.getElementById('inq-btn-loader');
        const errorBox  = document.getElementById('inq-error-box');

        // Loading state
        submitBtn.disabled = true;
        btnText.style.display  = 'none';
        btnLoader.style.display = 'flex';
        errorBox.style.display  = 'none';

        const data = new FormData(form);

        fetch('{{ route("inquiry.submit") }}', {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
            body: data
        })
        .then(function (res) { return res.json(); })
        .then(function (json) {
            if (json.success) {
                form.style.display = 'none';
                document.getElementById('inq-success').style.display = 'flex';
            } else {
                errorBox.textContent = json.message || 'Something went wrong. Please try again.';
                errorBox.style.display = 'block';
                submitBtn.disabled = false;
                btnText.style.display  = 'flex';
                btnLoader.style.display = 'none';
            }
        })
        .catch(function () {
            errorBox.textContent = 'Network error. Please check your connection and try again.';
            errorBox.style.display = 'block';
            submitBtn.disabled = false;
            btnText.style.display  = 'flex';
            btnLoader.style.display = 'none';
        });
    };
}());
</script>



	@if(setting('custom_footer_scripts'))
		{!! setting('custom_footer_scripts') !!}
	@endif
</body>
</html>
