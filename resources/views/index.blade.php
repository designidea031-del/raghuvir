@extends('layouts.app')

@section('title', 'Raghuvir Hygienic Chakki Atta | 100% Pure Whole Wheat Atta, Gujarat')
@section('meta_description', 'Raghuvir Foods bring fresh, stone-ground chakki atta made from selected golden wheat. Hygienic packing, home delivery in Gujarat. Order whole wheat atta today.')
@section('meta_keywords', 'raghuvir hygienic chakki atta, whole wheat atta gujarat, pure chakki atta, farm fresh wheat flour, gandhinagar chakki atta, stone ground atta')
@section('og_title', 'Raghuvir Hygienic Chakki Atta | 100% Pure Whole Wheat Atta, Gujarat')
@section('og_description', 'Raghuvir Foods bring fresh, stone-ground chakki atta made from selected golden wheat. Hygienic packing, home delivery in Gujarat. Order whole wheat atta today.')

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "{{ url('/#organization') }}",
      "name": "Raghuvir Foods",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/Raghuvir Logo.png') }}",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91 97254 27727",
        "contactType": "customer service",
        "email": "info@raghuviratta.com",
        "areaServed": "IN",
        "availableLanguage": ["en", "gu", "hi"]
      },
      "sameAs": [
        "https://facebook.com",
        "https://www.instagram.com"
      ]
    },
    {
      "@type": "LocalBusiness",
      "@id": "{{ url('/#localbusiness') }}",
      "name": "Raghuvir Foods",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/Raghuvir Logo.png') }}",
      "image": "{{ asset('images/Raghuvir Logo.png') }}",
      "description": "Raghuvir Foods bring fresh, stone-ground chakki atta made from selected golden wheat. Hygienic packing, home delivery in Gujarat. Order whole wheat atta today.",
      "telephone": "+91 97254 27727",
      "email": "info@raghuviratta.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Plot No 182, Vibrant Prime Industrial Park, kadadara, GIDC Area",
        "addressLocality": "Dehgam, Gandhinagar",
        "addressRegion": "Gujarat",
        "postalCode": "382305",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.0965117,
        "longitude": 72.7689042
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "09:00",
          "closes": "19:00"
        }
      ]
      {{-- // TODO: replace with real FSSAI registration number when available --}}
    },
    {
      "@type": "FAQPage",
      "@id": "{{ url('/#faq') }}",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the difference between chakki atta and regular mill atta?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chakki atta is ground slowly in a traditional stone chakki, so the bran and germ stay in the atta. This keeps more fibre and natural nutrition and makes rotis softer."
          }
        },
        {
          "@type": "Question",
          "name": "Does Raghuvir atta contain any chemicals or additives?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Raghuvir atta is made from 100% pure wheat with no artificial colour, bleaching or preservatives."
          }
        },
        {
          "@type": "Question",
          "name": "How do you keep the atta fresh during delivery?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It is packed in moisture-lock, food-grade bags and dispatched within 24-48 hours of order."
          }
        },
        {
          "@type": "Question",
          "name": "Do you accept bulk orders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Bulk supply is available for homes, shops, hotels and restaurants. Call us for quantity and rates."
          }
        },
        {
          "@type": "Question",
          "name": "How should I store the atta?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Keep it in a cool, dry place in an airtight container and check the best-before date on the pack."
          }
        }
      ]
    }
  ]
}
</script>
@endsection

@section('content')
<style>
.hero-spacer {
    height: 650px;
}
@media (max-width: 991px) {
    .hero-spacer {
        height: 380px;
    }
}
@media (max-width: 767px) {
    .hero-spacer {
        height: 280px;
    }
}
</style>
<!-- Header End -->

    <!-- Hero Section Start -->
    <div class="hero bg-section dark-section">
        <!-- Hero Box Start -->
        <div class="hero-box">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Healthy Farms, Healthy Lives</h3>
                                <h1 class="text-anime-style-3" data-cursor="-opaque">Raghuvir Hygienic Chakki Atta: Pure Whole Wheat Atta, Fresh from the Farm</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Raghuvir Foods grinds selected golden wheat in a traditional chakki to make fresh atta. No mixing, no shortcuts.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 10px;">Pure, soft, fibre-rich atta in hygienic packing, delivered to your home.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Hero Button Start -->
                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s" style="display: flex; gap: 14px; flex-wrap: wrap; align-items: center;">
                                <a href="{{ route('products') }}" class="btn-default btn-highlighted">Our Products</a>
                                <a href="{{ route('contact') }}" class="btn-default">Get Started</a>
                            </div>
                            <!-- Hero Button End -->
                        </div>
                        <!-- Hero Content End -->
                    </div>

                    <div class="col-xl-6">
                        <!-- Hero Image Start -->
                        <div class="hero-image">
                            <div class="hero-spacer"></div>
                        </div>
                        <!-- Hero Image End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Box End -->

        <!-- Hero Company Slider Box Start -->
        <div class="hero-company-slider-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Hero Company Slider Body Start -->
                        <div class="hero-company-slider-body">
                            <!-- Hero Company Marquee Start -->
                            <div class="hero-marquee-slider w-100">
                                <div class="hero-marquee-track">
                                    <!-- Group 1 -->
                                    <div class="hero-marquee-group">
                                        <span class="marquee-item"><i class="fa-solid fa-wheat-awn"></i> 100% Pure Chakki Atta</span>
                                        <span class="marquee-sep">✦</span>
                                        <span class="marquee-item"><i class="fa-solid fa-gear"></i> Farm-Fresh Golden Wheat</span>
                                        <span class="marquee-sep">✦</span>
                                        <span class="marquee-item"><i class="fa-solid fa-shield-halved"></i> Hygienically Packed</span>
                                        <span class="marquee-sep">✦</span>
                                        <span class="marquee-item"><i class="fa-solid fa-utensils"></i> Rich in Dietary Fibre</span>
                                        <span class="marquee-sep">✦</span>
                                        <span class="marquee-item"><i class="fa-solid fa-location-dot"></i> Soft & Fluffy Rotis</span>
                                        <span class="marquee-sep">✦</span>
                                    </div>
                                    <!-- Group 2 (Duplicate for seamless continuous loop) -->
                                    <div class="hero-marquee-group" aria-hidden="true">
                                        <span class="marquee-item"><i class="fa-solid fa-wheat-awn"></i> 100% Pure Chakki Atta</span>
                                        <span class="marquee-sep">✦</span>
                                        <span class="marquee-item"><i class="fa-solid fa-gear"></i> Farm-Fresh Golden Wheat</span>
                                        <span class="marquee-sep">✦</span>
                                        <span class="marquee-item"><i class="fa-solid fa-shield-halved"></i> Hygienically Packed</span>
                                        <span class="marquee-sep">✦</span>
                                        <span class="marquee-item"><i class="fa-solid fa-utensils"></i> Rich in Dietary Fibre</span>
                                        <span class="marquee-sep">✦</span>
                                        <span class="marquee-item"><i class="fa-solid fa-location-dot"></i> Soft & Fluffy Rotis</span>
                                        <span class="marquee-sep">✦</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Hero Company Marquee End -->
                        </div>
                        <!-- Hero Company Slider Body End -->
                    </div>
                </div>
            </div>        
        </div>
        <!-- Hero Company Slider Box End -->
    </div>
    <!-- Hero Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-images">
                        <div class="about-us-image-1">
                            <figure>
                                <video autoplay loop muted playsinline style="width: 100%; aspect-ratio: 1 / 1.0417; object-fit: cover; border-radius: 12px; display: block;">
                                    <source src="{{ asset('images/wheat video.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </figure>
                        </div>
                        <!-- About Us Image 1 End -->
                    
                        <!-- About Us Image 2 Start -->
                        <div class="about-us-image-2">
                            <figure class="image-anime">
                                <img src="{{ asset('images/home_about.webp') }}" alt="Raghuvir hygienic chakki atta packaging and traditional wheat farming" loading="lazy" decoding="async">
                            </figure>
                        </div>
                        <!-- About Us Image 2 End -->
                    </div>
                    <!-- About Us Image Box End -->
                </div>

                <div class="col-xl-7">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">About Our Farm</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">From Soil to Harvest, We Believe in Clean and Conscious Farming</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">At Raghuvir Foods, our journey begins in the field. We select quality wheat and bring it to you as fresh atta in a safe, clean way.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Our aim is simple: pure, fresh and trustworthy atta for every home.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We stand on three things: careful wheat selection, traditional chakki grinding, and hygienic packaging.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Item List Start -->
                        <div class="about-us-item-list wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Us Item Start -->
                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-about-item-1.svg') }}" alt="Sustainable Farming Practices icon">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Sustainable Farming Practices</h3>
                                </div>
                            </div>
                            <!-- About Us Item End -->

                            <!-- About Us Item Start -->
                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-about-item-2.svg') }}" alt="Pure Chemical-Free Produce icon">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Pure, Chemical-Free Produce</h3>
                                </div>
                            </div>
                            <!-- About Us Item End -->

                            <!-- About Us Item Start -->
                            <div class="about-us-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-about-item-3.svg') }}" alt="Passion for Honest Agriculture icon">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Passion for Honest Agriculture</h3>
                                </div>
                            </div>
                            <!-- About Us Item End -->
                        </div>
                        <!-- About Us Item List End -->

                        <!-- About Us Button Start -->
                        <div class="about-us-btn wow fadeInUp" data-wow-delay="0.8s">
                            <a href="{{ route('about') }}" class="btn-default">More About Us</a>
                        </div>
                        <!-- About Us Button End -->
                    </div>
                    <!-- About Us Content End -->
                </div>

                    {{-- About Us Footer Hidden --}}

            </div>
        </div>
    </div>
    <!-- About Us Section End -->


    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">OUR QUALITY COMMITMENT</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Committed to Honest and Clean Sustainable Farming</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We keep purity, freshness and hygiene at the center of everything we make.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 8px;">From traditional chakki milling to careful packaging, every step preserves natural nutrition.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Us Box Start -->
                        <div class="why-choose-us-box tab-content wow fadeInUp" data-wow-delay="0.4s" id="myTabContent">
                            <!-- Why Choose Nav start -->
                            <div class="why-choose-nav">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="tab1" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-selected="true">Wheat Selection</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-selected="false">Milling</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab3" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-selected="false">Quality & Hygiene</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- Why Choose Nav End -->
        
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                <!-- Why Choose Tab Content Start -->
                                <div class="why-choose-tab-content">
                                    <p>We value soil health, careful water use and natural methods so wheat quality stays high.</p>
                                    <!-- Why Choose Info Item List Start -->
                                    <div class="why-choose-info-item-list">
                                        <!-- Why Choose Info Item Start -->
                                        <div class="why-choose-info-item">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-why-choose-info-item-1.svg') }}" alt="Pure Golden Wheat">
                                            </div>
                                            <div class="why-choose-info-item-content">
                                                <h3>Pure Golden Wheat</h3>
                                                <p>Natural farming methods and careful harvesting protect grain quality before milling.</p>
                                            </div>
                                        </div>
                                        <!-- Why Choose Info Item End -->

                                        <!-- Why Choose Info Item Start -->
                                        <div class="why-choose-info-item">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-why-choose-info-item-2.svg') }}" alt="Chemical-Free Handling">
                                            </div>
                                            <div class="why-choose-info-item-content">
                                                <h3>Chemical-Free Handling</h3>
                                                <p>Structured cleaning and natural processes ensure optimal purity before grinding begins.</p>
                                            </div>
                                        </div>
                                        <!-- Why Choose Info Item  End -->
                                    </div>
                                    <!-- Why Choose Info Item List End -->
                                </div>
                                <!-- Why Choose Tab Content End -->
                            </div>
                            <!-- Why Choose Item End -->
        
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                <!-- Why Choose Tab Content Start -->
                                <div class="why-choose-tab-content">
                                    <p>Practices like compost and crop rotation keep the soil fertile.</p>
                                    <!-- Why Choose Info Item List Start -->
                                    <div class="why-choose-info-item-list">
                                        <!-- Why Choose Info Item Start -->
                                        <div class="why-choose-info-item">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-why-choose-info-item-1.svg') }}" alt="Natural Soil Enrichment">
                                            </div>
                                            <div class="why-choose-info-item-content">
                                                <h3>Natural Soil Enrichment</h3>
                                                <p>Healthy soil and conscious cultivation methods maintain wheat texture and nutritional density.</p>
                                            </div>
                                        </div>
                                        <!-- Why Choose Info Item End -->

                                        <!-- Why Choose Info Item Start -->
                                        <div class="why-choose-info-item">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-why-choose-info-item-2.svg') }}" alt="Fresh Produce Standards">
                                            </div>
                                            <div class="why-choose-info-item-content">
                                                <h3>Fresh Produce Standards</h3>
                                                <p>Regular inspection and traditional slow grinding preserve the grain's natural aroma.</p>
                                            </div>
                                        </div>
                                        <!-- Why Choose Info Item  End -->
                                    </div>
                                    <!-- Why Choose Info Item List End -->
                                </div>
                                <!-- Why Choose Tab Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                <!-- Why Choose Tab Content Start -->
                                <div class="why-choose-tab-content">
                                    <p>Dispatch within 24-48 hours of order. Home and bulk supply available.</p>
                                    <!-- Why Choose Info Item List Start -->
                                    <div class="why-choose-info-item-list">
                                        <!-- Why Choose Info Item Start -->
                                        <div class="why-choose-info-item">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-why-choose-info-item-1.svg') }}" alt="Fresh Milling on Order">
                                            </div>
                                            <div class="why-choose-info-item-content">
                                                <h3>Fresh Milling on Order</h3>
                                                <p>We mill fresh batches on order to provide maximum taste, softness and nutritional value.</p>
                                            </div>
                                        </div>
                                        <!-- Why Choose Info Item End -->

                                        <!-- Why Choose Info Item Start -->
                                        <div class="why-choose-info-item">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-why-choose-info-item-2.svg') }}" alt="Reliable Doorstep Delivery">
                                            </div>
                                            <div class="why-choose-info-item-content">
                                                <h3>Reliable Doorstep Delivery</h3>
                                                <p>Dispatched in moisture-lock food-grade bags for households, retailers and commercial kitchens.</p>
                                            </div>
                                        </div>
                                        <!-- Why Choose Info Item  End -->
                                    </div>
                                    <!-- Why Choose Info Item List End -->
                                </div>
                                <!-- Why Choose Tab Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Us Box End -->

                        <!-- Section CTA -->
                        <div class="why-choose-btn wow fadeInUp" data-wow-delay="0.5s" style="margin-top: 30px;">
                            <a href="{{ route('about') }}" class="btn-default">Explore Our Quality Process</a>
                        </div>
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Why Choose Image Box Start -->
                    <div class="why-choose-image-box">
                        <!-- Why Choose Image Box 1 Start -->
                        <div class="why-choose-image-box-1">
                            <!-- Why Choose Image 1 Start -->
                            <div class="why-choose-image">
                                <figure>
                                    <img src="{{ asset('images/home_02.webp') }}" alt="Raghuvir natural wheat processing and chakki atta quality" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <!-- Why Choose Image 1 End -->
                        </div>
                        <!-- Why Choose Image Box 1 End -->

                        <!-- Why Choose Image Box 2 Start -->
                        <div class="why-choose-image-box-2">
                            <!-- Why Choose Info Box Start -->
                            <div class="why-choose-info-box">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-why-choose-us-info-box.svg') }}?v={{ filemtime(public_path('images/icon-why-choose-us-info-box.svg')) }}" alt="Transparent & Traceable Produce">
                                </div>
                                <div class="why-choose-info-content">
                                    <h3>Transparent & Traceable Produce</h3>
                                </div>
                            </div>
                            <!-- Why Choose Info Box End -->

                            <!-- Why Choose Image 2 Start -->
                            <div class="why-choose-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/why-choose-image-2.webp') }}" alt="Pure Golden Wheat Grains - Transparent & Traceable Produce" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <!-- Why Choose Image 2 End -->
                             
                            <!-- Contact Us Circle Start -->
                            <div class="contact-us-circle">
                                <a href="{{ route('contact') }}">
                                    <img src="{{ asset('images/contact-us-circle.svg') }}" alt="Contact Raghuvir Atta">
                                </a>
                            </div>
                            <!-- Contact Us Circle End -->
                        </div>
                        <!-- Why Choose Image Box 2 End -->
                    </div>
                    <!-- Why Choose Image Box End -->
                </div>


            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video bg-section dark-section parallaxie">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <!-- Intro Video Content Start -->
                    <div class="intro-video-content text-center">
                        <!-- Section Title Start -->
                        <div class="section-title text-center" style="margin-bottom: 50px;">
                            <h3 class="wow fadeInUp" style="color: var(--accent-color); margin-bottom: 12px; font-size: 16px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px;">FROM GRAIN TO KITCHEN</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Follow the Journey of Pure Farming Where Nature, Technique, and Passion Come Together</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: rgba(255, 255, 255, 0.85); font-size: 18px; max-width: 800px; margin: 20px auto 0 auto; line-height: 1.6;">
                                At Raghuvir we make hygienic chakki atta from handpicked premium wheat grains. Traditional grinding and modern quality checks come together so your rotis are soft, aromatic and nutritious.
                            </p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Intro Video Content End -->
                </div>

                <div class="col-lg-12">
                    <!-- Intro Video Item List Start -->
                    <div class="intro-video-item-list wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Intro Video Item Start -->
                        <div class="intro-video-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-intro-video-item-1.svg') }}" alt="Our Sustainable Farming in Action">
                            </div>
                            <div class="intro-video-item-content">
                                <h3>Our Sustainable Farming in Action</h3>
                                <p>Carefully selecting golden wheat grown with conscious and sustainable farming practices.</p>
                            </div>
                        </div>
                        <!-- Intro Video Item End -->

                        <!-- Intro Counter Item Start -->
                        <div class="intro-video-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-intro-video-item-2.svg') }}" alt="Experience the Passion of Our Work">
                            </div>
                            <div class="intro-video-item-content">
                                <h3>Experience the Passion of Our Work</h3>
                                <p>Multi-step cleaning and gentle stone grinding preserve natural bran, germ and aroma.</p>
                            </div>
                        </div>
                        <!-- Intro Counter Item End -->

                        <!-- Intro Counter Item Start -->
                        <div class="intro-video-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-intro-video-item-3.svg') }}" alt="What Makes Our Produce Truly Pure">
                            </div>
                            <div class="intro-video-item-content">
                                <h3>What Makes Our Produce Truly Pure</h3>
                                <p>Rigorous moisture and purity testing followed by protective moisture-lock packaging.</p>
                            </div>
                        </div>
                        <!-- Intro Counter Item End -->
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Product Section Start -->
    <div class="our-products">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">OUR PRODUCTS</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Discover Pure, Natural Harvests Straight from Our Fields</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="max-width: 760px; margin: 15px auto 0 auto; color: var(--text-color); font-size: 16px; line-height: 1.6;">Pure, stone-ground flours and wheat products crafted for everyday meals, festive delicacies and wholesome family health.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @forelse($featuredProducts as $index => $prod)
                    <div class="col-lg-4 col-md-6">
                        <!-- Product Item Start -->
                        <div class="product-item wow fadeInUp" data-wow-delay="{{ 0.2 * ($index % 3) }}s">
                            <!-- Product Item Image Start -->
                            <div class="product-item-img">
                                <a href="{{ route('product-details', ['product' => $prod->slug]) }}" data-cursor-text="View">
                                    <figure>
                                        <img src="{{ $prod->image_url }}" alt="{{ $prod->image_alt ?: $prod->name }}" loading="lazy" decoding="async">
                                    </figure>
                                </a>
                            </div>
                            <!-- Product Item Image End -->

                            <!-- Product Item Body Start -->
                            <div class="product-item-body">                            
                                <div class="product-item-content">
                                    <span style="display: block; font-size: 13px; font-weight: 600; color: var(--accent-color); margin-bottom: 6px;">{{ $prod->subtitle }}</span>
                                    <h2 style="margin-bottom: 10px;"><a href="{{ route('product-details', ['product' => $prod->slug]) }}">{{ $prod->name }}</a></h2>
                                    <p style="font-size: 14px; line-height: 1.5; color: #555; margin-bottom: 16px;">{{ $prod->short_description }}</p>
                                </div>

                                <div class="product-item-btn">
                                    <a href="{{ route('product-details', ['product' => $prod->slug]) }}" class="btn-default">View Details</a>
                                </div>
                            </div>
                            <!-- Product Item Body End -->
                        </div>
                        <!-- Product Item End -->
                    </div>
                @empty
                    <div class="col-12 text-center py-4">
                        <p>No products available at the moment.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
    <!-- Our Product Section End -->

    <!-- How It Work Section Start -->
    <div class="how-it-work bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">OUR PROCESS</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">See How We Bring Fresh, Organic Goodness to Your Kitchen</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="max-width: 760px; margin: 15px auto 0 auto; color: var(--text-color); font-size: 16px; line-height: 1.6;">From carefully selected wheat to traditional stone chakki milling, see each step that brings pure atta to your home.</p>
                    </div>
                    <!-- Section Title End -->
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- How Work Step Box Start -->
                    <div class="how-work-step-box how-work-step-5 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- How Work Item Start -->
                        <div class="how-work-item">
                            <div class="how-work-step-no">
                                <h3>01</h3>
                            </div>
                            <div class="how-work-item-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/how-it-work-wheat-selection.webp') }}" alt="01 Wheat Selection - Selected Pure Wheat Grains" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Wheat Selection</h3>
                                    <p>Selected, pure wheat grains chosen for quality and wholesome nutrition.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Selected, Pure Wheat Grains</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- How Work Item End -->

                        <!-- How Work Item Start -->
                        <div class="how-work-item">
                            <div class="how-work-step-no">
                                <h3>02</h3>
                            </div>
                            <div class="how-work-item-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/how-it-work-cleaning.webp') }}" alt="02 Cleaning - Multi-step Removal of Dust and Impurities" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Cleaning</h3>
                                    <p>Multi-step removal of dust and impurities to ensure highest food safety.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Multi-Step Removal of Impurities</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- How Work Item End -->

                        <!-- How Work Item Start -->
                        <div class="how-work-item">
                            <div class="how-work-step-no">
                                <h3>03</h3>
                            </div>
                            <div class="how-work-item-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/how-it-work-chakki-grinding.webp') }}" alt="03 Chakki Grinding - Slow Traditional Stone Grinding" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Chakki Grinding</h3>
                                    <p>Slow, traditional stone grinding keeps aroma and nutrition intact.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Slow, Traditional Stone Grinding</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- How Work Item End -->

                        <!-- How Work Item Start -->
                        <div class="how-work-item">
                            <div class="how-work-step-no">
                                <h3>04</h3>
                            </div>
                            <div class="how-work-item-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/how-it-work-quality-check.webp') }}" alt="04 Quality Check - Moisture and Purity Tested" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Quality Check</h3>
                                    <p>Moisture and purity tested to guarantee consistent roti softness.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Moisture & Purity Tested</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- How Work Item End -->

                        <!-- How Work Item Start -->
                        <div class="how-work-item">
                            <div class="how-work-step-no">
                                <h3>05</h3>
                            </div>
                            <div class="how-work-item-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/how-it-work-packaging.webp') }}" alt="05 Packaging - Food-grade Moisture-lock Bags" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Packaging</h3>
                                    <p>Food-grade, moisture-lock bags preserve farm-fresh goodness.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Food-Grade Moisture-Lock Bags</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- How Work Item End -->
                    </div>
                    <!-- How Work Step Box End -->

                    <div class="text-center wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 40px;">
                        <a href="{{ route('about') }}" class="btn-default btn-highlighted">Learn More About Our Process</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- How It Work Section End -->

    <!-- Door to Door Delivery Around Gujarat Section Start -->
    <div class="gujarat-delivery-section" id="gujarat-delivery">
        <div class="container">
            <div class="guj-main-card">
                <div class="row align-items-center">
                    <!-- Left Column: Content, 2x2 Features & Actions -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="guj-content-wrap">
                            <!-- Top Pill Badge -->
                            <div class="guj-badge wow fadeInUp">
                                <span class="guj-badge-icon"><i class="fa-solid fa-truck-fast"></i></span>
                                <span class="guj-badge-text">Doorstep Delivery Across Gujarat</span>
                            </div>

                            <!-- Main Heading -->
                            <h2 class="guj-heading wow fadeInUp" data-wow-delay="0.1s">
                                Fresh Chakki Atta, Delivered to Your Doorstep
                            </h2>

                            <!-- Description -->
                            <p class="guj-lead wow fadeInUp" data-wow-delay="0.15s">
                                From Gandhinagar we deliver hygienic chakki atta to Ahmedabad, Surat, Vadodara, Rajkot and other cities in Gujarat.
                            </p>
                            <p class="guj-lead wow fadeInUp" data-wow-delay="0.18s" style="margin-top: 10px; font-size: 15px;">
                                Whether you need atta for your family kitchen, regular retail stock or a larger business requirement, our team can help with product availability, pack sizes and order requirements.
                            </p>

                            <!-- 2x2 Feature Cards Grid -->
                            <div class="guj-features-grid wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Feature 1 -->
                                <div class="guj-feature-item">
                                    <div class="guj-feature-icon-wrap">
                                        <i class="fa-solid fa-house-chimney"></i>
                                    </div>
                                    <div class="guj-feature-text">
                                        <h4>Fresh Milling on Order</h4>
                                        <p>Grains milled fresh upon receiving your order for maximum softness.</p>
                                    </div>
                                </div>

                                <!-- Feature 2 -->
                                <div class="guj-feature-item">
                                    <div class="guj-feature-icon-wrap">
                                        <i class="fa-solid fa-store"></i>
                                    </div>
                                    <div class="guj-feature-text">
                                        <h4>24-48 Hours Dispatch</h4>
                                        <p>Quick turnaround and speedy dispatch to cities across Gujarat.</p>
                                    </div>
                                </div>

                                <!-- Feature 3 -->
                                <div class="guj-feature-item">
                                    <div class="guj-feature-icon-wrap">
                                        <i class="fa-solid fa-utensils"></i>
                                    </div>
                                    <div class="guj-feature-text">
                                        <h4>Moisture-Lock Packing</h4>
                                        <p>Food-grade packaging prevents humidity and retains freshness.</p>
                                    </div>
                                </div>

                                <!-- Feature 4 -->
                                <div class="guj-feature-item">
                                    <div class="guj-feature-icon-wrap">
                                        <i class="fa-solid fa-boxes-stacked"></i>
                                    </div>
                                    <div class="guj-feature-text">
                                        <h4>Home & Bulk Supply</h4>
                                        <p>Convenient pack sizes for households, retail stores and hotels.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="guj-actions-row wow fadeInUp" data-wow-delay="0.25s">
                                <button
                                    type="button"
                                    class="btn-default btn-highlighted guj-order-btn"
                                    onclick="openInquiryModal(this)"
                                    data-product="Whole Wheat Atta Supply - Gujarat Wide"
                                    data-blank-message="true"
                                >Order For Doorstep Delivery</button>

                                <a href="tel:+919725427727" class="guj-phone-pill">
                                    <div class="guj-phone-icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="guj-phone-text">
                                        <small>Call Us</small>
                                        <strong>+91 97254 27727</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Grand Visual Showcase Frame -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="guj-showcase-box wow fadeIn" data-wow-delay="0.2s">
                            <div class="guj-showcase-frame">
                                <img
                                    src="{{ asset('images/gujarat_delivery_showcase_hd.webp') }}"
                                    alt="Fresh Chakki Atta Delivered to Your Doorstep in Gujarat"
                                    class="guj-showcase-img"
                                    loading="lazy"
                                    decoding="async"
                                >
                                <!-- Floating Trust Badge -->
                                <div class="guj-showcase-badge">
                                    <div class="badge-icon">
                                        <i class="fa-solid fa-award"></i>
                                    </div>
                                    <div class="badge-content">
                                        <strong>Quality Whole Wheat Atta</strong>
                                        <span>Kadadara, Gandhinagar Plant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Door to Door Delivery Around Gujarat Section End -->





    <!-- Our Faqs Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">                
                <div class="col-xl-7">
                    <!-- Faqs Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">FREQUENTLY ASKED QUESTIONS</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Simple, Clear Answers to Help You Understand Our Work</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->  
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h3 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Does Raghuvir atta contain any chemicals or additives?
                                    </button>
                                </h3>
                                <div id="collapse1" class="accordion-collapse collapse" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Raghuvir atta is made from 100% pure wheat with no artificial colour, bleaching or preservatives.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h3 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        How do you keep the atta fresh during delivery?
                                    </button>
                                </h3>
                                <div id="collapse3" class="accordion-collapse collapse" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>It is packed in moisture-lock, food-grade bags and dispatched within 24-48 hours of order.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                <h3 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Do you accept bulk orders?
                                    </button>
                                </h3>
                                <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes. Bulk supply is available for homes, shops, hotels and restaurants. Call us for quantity and rates.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                             
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h3 class="accordion-header" id="heading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        Do you supply atta in bulk?
                                    </button>
                                </h3>
                                <div id="collapse6" class="accordion-collapse collapse" role="region" aria-labelledby="heading6" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Bulk supply can be available for retailers, restaurants, caterers, food businesses and other commercial requirements. Contact the team to discuss current product availability, quantities and pack sizes.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h3 class="accordion-header" id="heading7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        What products does Raghuvir Atta offer?
                                    </button>
                                </h3>
                                <div id="collapse7" class="accordion-collapse collapse" role="region" aria-labelledby="heading7" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>The current range includes Whole Wheat Atta, Bati Atta and Wheat Bran. Product availability and pack sizes may vary.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                                <h3 class="accordion-header" id="heading8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                        How can I enquire about Raghuvir products?
                                    </button>
                                </h3>
                                <div id="collapse8" class="accordion-collapse collapse" role="region" aria-labelledby="heading8" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>You can contact the Raghuvir team for product information, availability, bulk requirements and other business enquiries.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Faqs Content End -->
                </div>

                <div class="col-xl-5">
                    <!-- Faqs Image Start -->
                    <div class="faqs-image-box">
                        <!-- Faqs Image Start -->
                        <div class="faqs-image">
                            <figure class="image-anime">
                                <img src="{{ asset('images/home_04.webp') }}" alt="Customer satisfaction and fresh chakki atta answers" loading="lazy" decoding="async">
                            </figure>
                        </div>
                        <!-- Faqs Image End -->
                    </div>
                    <!-- Faqs Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs End -->

    {{-- Testimonials Section Hidden as requested --}}
    @if(false)
    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">CUSTOMER EXPERIENCES</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Genuine Testimonials Reflecting Our Quality and Trust</h2>
                    </div>
                    <!-- Section Title End -->
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/our-testimonials-image-1.jpg') }}" alt="Customer review for Raghuvir hygienic chakki atta">
                                            </figure>
                                        </div>
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-quote">
                                                    <img src="{{ asset('images/testimonial-item-quote.svg') }}" alt="">
                                                </div>
                                            </div>                                         
                                            <div class="testimonial-item-content">
                                                <h3>“[Customer review goes here]”</h3>
                                                <p style="margin-top: 10px; color: var(--text-color); font-size: 16px; line-height: 1.6;">[Customer review goes here]</p>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h3>[Customer Name]</h3>
                                                <p>[City]</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/our-testimonials-image-2.jpg') }}" alt="Customer review for soft rotis and chakki fresh flour">
                                            </figure>
                                        </div>
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-quote">
                                                    <img src="{{ asset('images/testimonial-item-quote.svg') }}" alt="">
                                                </div>
                                            </div>                                         
                                            <div class="testimonial-item-content">
                                                <h3>“[Customer review goes here]”</h3>
                                                <p style="margin-top: 10px; color: var(--text-color); font-size: 16px; line-height: 1.6;">[Customer review goes here]</p>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h3>[Customer Name]</h3>
                                                <p>[City]</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/our-testimonials-image-3.jpg') }}" alt="Customer review for pure whole wheat atta quality">
                                            </figure>
                                        </div>
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-rating">
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                    <i class="fa fa-solid fa-star"></i>
                                                </div>
                                                <div class="testimonial-item-quote">
                                                    <img src="{{ asset('images/testimonial-item-quote.svg') }}" alt="">
                                                </div>
                                            </div>                                         
                                            <div class="testimonial-item-content">
                                                <h3>“[Customer review goes here]”</h3>
                                                <p style="margin-top: 10px; color: var(--text-color); font-size: 16px; line-height: 1.6;">[Customer review goes here]</p>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h3>[Customer Name]</h3>
                                                <p>[City]</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->
    @endif

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">FROM THE RAGHUVIR JOURNAL</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Dive into Educational, Inspiring, and Farm-Fresh Content</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="max-width: 760px; margin: 15px auto 0 auto; color: var(--text-color); font-size: 16px; line-height: 1.6;">Explore practical information about wheat flour, atta selection, milling and everyday Indian cooking — created to help you make more informed choices for your kitchen.</p>
                    </div>
                    <!-- Section Title End -->
                </div>                
            </div>

            <div class="row">
                @if(isset($latestBlogs) && $latestBlogs->isNotEmpty())
                    @foreach($latestBlogs as $index => $blog)
                        <div class="col-xl-4 col-md-6">
                            <!-- Post Item Start -->
                            <div class="post-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">                        
                                <!-- Post Item Body Start -->
                                <div class="post-item-box">
                                    <!-- Post Featured Image Start-->
                                    <div class="post-featured-image">
                                        <a href="{{ route('blog.single', $blog->slug) }}" data-cursor-text="View">
                                            <figure class="image-anime" style="height: 250px; overflow: hidden;">
                                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Post Featured Image End -->

                                    <!-- Post Item Content Start -->
                                    <div class="post-item-content">
                                        <div style="font-size: 0.775rem; color: #EF801C; font-weight: 700; margin-bottom: 0.4rem;">
                                            <i class="fa-solid fa-tag"></i> {{ $blog->category ?? 'Atta & Cooking' }} • {{ $blog->reading_time ?? '4 min read' }}
                                        </div>
                                        <h2><a href="{{ route('blog.single', $blog->slug) }}">{{ $blog->title }}</a></h2>
                                        <p>{{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 95) }}</p>
                                    </div>
                                    <!-- Post Item Content End -->                                                         
                                </div>
                                <!-- Post Item Body End -->
                                 
                                <!-- Post Item Readmore Button Start-->
                                <div class="post-item-btn">
                                    <a href="{{ route('blog.single', $blog->slug) }}" class="readmore-btn">Read More</a>
                                </div>
                                <!-- Post Item Readmore Button End-->
                            </div>
                            <!-- Post Item End -->
                        </div>
                    @endforeach
                @else
                    <!-- Blog 1 -->
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item wow fadeInUp">                        
                            <div class="post-item-box">
                                <div class="post-featured-image">
                                    <a href="{{ route('blog') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('images/post-1.webp') }}" alt="Chakki Atta vs Mill Atta: Which Is Better for Your Family?" loading="lazy" decoding="async">
                                        </figure>
                                    </a>
                                </div>
                                <div class="post-item-content">
                                    <div style="font-size: 0.775rem; color: #EF801C; font-weight: 700; margin-bottom: 0.4rem;">
                                        <i class="fa-solid fa-tag"></i> Atta Guide • 4 min read
                                    </div>
                                    <h2><a href="{{ route('blog') }}">Chakki Atta vs Mill Atta: Which Is Better for Your Family?</a></h2>
                                    <p>Understand the differences between slow stone chakki grinding and industrial milling, and discover which flour delivers better nutrition for your family.</p>
                                </div>
                            </div>
                            <div class="post-item-btn">
                                <a href="{{ route('blog') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog 2 -->
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item wow fadeInUp" data-wow-delay="0.2s">                        
                            <div class="post-item-box">
                                <div class="post-featured-image">
                                    <a href="{{ route('blog') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('images/post-2.webp') }}" alt="How to Knead Atta for Perfectly Soft Rotis" loading="lazy" decoding="async">
                                        </figure>
                                    </a>
                                </div>
                                <div class="post-item-content">
                                    <div style="font-size: 0.775rem; color: #EF801C; font-weight: 700; margin-bottom: 0.4rem;">
                                        <i class="fa-solid fa-tag"></i> Milling Process • 3 min read
                                    </div>
                                    <h2><a href="{{ route('blog') }}">How to Knead Atta for Perfectly Soft Rotis</a></h2>
                                    <p>Master the art of dough kneading with expert tips on water temperature, resting time, and gentle rolling for fluffy, soft rotis every time.</p>
                                </div>
                            </div>
                            <div class="post-item-btn">
                                <a href="{{ route('blog') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog 3 -->
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item wow fadeInUp" data-wow-delay="0.4s">                        
                            <div class="post-item-box">
                                <div class="post-featured-image">
                                    <a href="{{ route('blog') }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset('images/post-3.webp') }}" alt="How to Choose the Right Bati Atta for Dal Bati" loading="lazy" decoding="async">
                                        </figure>
                                    </a>
                                </div>
                                <div class="post-item-content">
                                    <div style="font-size: 0.775rem; color: #EF801C; font-weight: 700; margin-bottom: 0.4rem;">
                                        <i class="fa-solid fa-tag"></i> Cooking Tips • 5 min read
                                    </div>
                                    <h2><a href="{{ route('blog') }}">How to Choose the Right Bati Atta for Dal Bati</a></h2>
                                    <p>Discover the importance of flour texture and grain selection when making authentic, delicious Dal Bati and traditional dishes.</p>
                                </div>
                            </div>
                            <div class="post-item-btn">
                                <a href="{{ route('blog') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Section CTA -->
            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 40px;">
                    <a href="{{ route('blog') }}" class="btn-default btn-highlighted">Explore All Articles</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

    <!-- Main Footer End -->
@endsection
