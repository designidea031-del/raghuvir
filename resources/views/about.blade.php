@extends('layouts.app')

@section('title', 'About Raghuvir Foods | Hygienic Chakki Atta Maker in Gandhinagar, Gujarat')
@section('meta_description', 'Know the story of Raghuvir Foods: our wheat selection, traditional chakki grinding, hygienic packing and the people behind Gujarat\'s pure chakki atta.')
@section('og_title', 'About Raghuvir Foods | Hygienic Chakki Atta Maker in Gandhinagar, Gujarat')
@section('og_description', 'Know the story of Raghuvir Foods: our wheat selection, traditional chakki grinding, hygienic packing and the people behind Gujarat\'s pure chakki atta.')

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AboutPage",
      "@id": "{{ url('/about#webpage') }}",
      "url": "{{ url('/about') }}",
      "name": "About Raghuvir Foods | Hygienic Chakki Atta Maker in Gandhinagar, Gujarat",
      "description": "Know the story of Raghuvir Foods: our wheat selection, traditional chakki grinding, hygienic packing and the people behind Gujarat's pure chakki atta.",
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "About Us",
            "item": "{{ url('/about') }}"
          }
        ]
      },
      "isPartOf": {
        "@type": "WebSite",
        "@id": "{{ url('/#website') }}",
        "name": "Raghuvir Foods",
        "url": "{{ url('/') }}"
      },
      "about": {
        "@type": "Organization",
        "@id": "{{ url('/#organization') }}"
      }
    },
    {
      "@type": "Organization",
      "@id": "{{ url('/#organization') }}",
      "name": "Raghuvir Foods",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/Raghuvir Logo.png') }}",
      "description": "Raghuvir Foods is a hygienic chakki atta brand from Gandhinagar, Gujarat. Pure wheat, traditional grinding, and trust.",
      {{-- // TODO: Add real FSSAI registration number when available --}}
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Plot No. 124, GIDC Area, Kadadara",
        "addressLocality": "Gandhinagar",
        "addressRegion": "Gujarat",
        "postalCode": "382305",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91 97254 27727",
        "contactType": "customer service",
        "email": "info@raghuviratta.com",
        "areaServed": "IN",
        "availableLanguage": ["en", "gu", "hi"]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "{{ url('/about#faq') }}",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who is Raghuvir Foods and what do you make?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Raghuvir Foods is a hygienic chakki atta brand from Gandhinagar, Gujarat. We make Whole Wheat Atta, Bati Atta and Wheat Bran."
          }
        },
        {
          "@type": "Question",
          "name": "Does your atta contain any chemicals or additives?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our atta is made from 100% pure wheat, with no artificial colour, bleaching or preservatives."
          }
        },
        {
          "@type": "Question",
          "name": "How do you keep the atta fresh during delivery?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The atta is packed in food-grade, moisture-lock bags and dispatched within 24-48 hours of order."
          }
        },
        {
          "@type": "Question",
          "name": "Do you accept bulk orders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Bulk supply is available for homes, shops, hotels and restaurants. Call us for rates."
          }
        },
        {
          "@type": "Question",
          "name": "How do you check the wheat quality?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Wheat is cleaned before grinding, and the finished atta is checked for moisture and purity."
          }
        }
      ]
    }
  ]
}
</script>
@endsection

@section('content')
<!-- Header End -->

    <!-- Page Header Section Start -->
    <div class="page-header bg-section dark-section parallaxie" data-image="{{ \App\Models\PageBanner::getImage('about') }}" style="background-image: url('{{ \App\Models\PageBanner::getImage('about') }}') !important; background-position: {{ \App\Models\PageBanner::getPosition('about') }} !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-images">
                        <div class="about-us-image-1">
                            <figure class="image-anime">
                                <img src="{{ asset('images/about-us-chakki-flour.jpg') }}" alt="Fresh chakki atta on wooden platter with traditional stone grinding chakki">
                            </figure>
                        </div>
                        <!-- About Us Image 1 End -->
                    
                        <!-- About Us Image 2 Start -->
                        <div class="about-us-image-2">
                            <figure class="image-anime">
                                <img src="{{ asset('images/about-us-wheat-close.jpg') }}" alt="Pure golden wheat grains for hygienic chakki atta">
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
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Raghuvir Foods started with a simple idea: every home should get pure, fresh and trustworthy atta every day. We select good quality wheat, grind it slowly in a traditional chakki, and deliver it in hygienic packing.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Our plant is in Kadadara, GIDC Area, Gandhinagar, Gujarat. From wheat selection to packing, we focus on cleanliness, quality and honesty at every step. {{-- // TODO: add FSSAI license number here --}}</p>
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
                                    <img src="{{ asset('images/icon-about-item-2.svg') }}" alt="Pure, Chemical-Free Produce icon">
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

                    </div>
                    <!-- About Us Content End -->
                </div>


            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Approach</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Growing Better Through Purity, Care, and Long-Term Sustainability</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Content Button Start -->
                    <div class="section-content-btn">
                       <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>We follow an approach built on purity, care and long-term sustainability. Protecting soil health, using water wisely and avoiding harmful substances is the base of our work.</p>
                        </div>
                        <!-- Section Title Content End -->    
                    </div>
                    <!-- Section Content Button End -->
                </div>
            </div>
                
            <div class="row">
                <div class="col-xl-6">
                    <!-- Approach Item Start -->
                    <div class="approach-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Approach Item Image Start -->
                        <div class="approach-item-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/our-mission-home-atta.jpg') }}" alt="Traditional home cooking with pure Raghuvir chakki atta">
                            </figure>
                        </div>
                        <!-- Approach Item Image End -->

                        <!-- Approach Item Body Start -->
                        <div class="approach-item-body">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-our-approach-item-1.svg') }}" alt="Our Mission icon">
                            </div>
                            <div class="approach-item-content">
                                <h3>Our Mission</h3>
                                <p>To bring pure, fresh and nutritious atta to every home, with honesty, transparency and respect for nature.</p>
                                <ul>
                                    <li>Promoting Natural Farming Practices</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Approach Item Body End -->
                    </div>
                    <!-- Approach Item End -->
                </div>

                <div class="col-xl-6">
                    <!-- Approach Item Start -->
                    <div class="approach-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Approach Item Image Start -->
                        <div class="approach-item-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/our-vision-raghuvir-family.jpg') }}" alt="Happy Indian family with Raghuvir Special Bati Atta in golden wheat field">
                            </figure>
                        </div>
                        <!-- Approach Item Image End -->

                        <!-- Approach Item Body Start -->
                        <div class="approach-item-body">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-our-approach-item-2.svg') }}" alt="Our Vision icon">
                            </div>
                            <div class="approach-item-content">
                                <h3>Our Vision</h3>
                                <p>To become the most trusted hygienic chakki atta brand in Gujarat, where sustainable farming and modern quality go together.</p>
                                <ul>
                                    <li>Building a Sustainable Food Future</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Approach Item Body End -->
                    </div>
                    <!-- Approach Item End -->
                </div>

                {{-- Hide client logos section until real partner logos are provided
                <div class="col-lg-12">
                    <!-- Approach Comapany Slider Box Start -->
                    <div class="approach-company-slider-box wow fadeInUp" data-wow-delay="1s">
                        <!-- Comapany Support Content Start -->
                        <div class="company-supports-content">
                            <hr>
                            <p>Trusted by retailers, hotels and families across Gujarat</p>
                            <hr>
                        </div>
                        <!-- Comapany Support Content End -->

                        <!-- Comapany Support Slider Start -->
                        <div class="company-supports-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- Company Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="{{ asset('images/company-logo-primary-1.svg') }}" alt="Client partner logo">
                                        </div>
                                    </div>
                                    <!-- Comapany Support Logo End -->
    
                                    <!-- Company Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="{{ asset('images/company-logo-primary-2.svg') }}" alt="Client partner logo">
                                        </div>
                                    </div>
                                    <!-- Comapany Support Logo End -->
    
                                    <!-- Company Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="{{ asset('images/company-logo-primary-3.svg') }}" alt="Client partner logo">
                                        </div>
                                    </div>
                                    <!-- Comapany Support Logo End -->
    
                                    <!-- Company Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="{{ asset('images/company-logo-primary-4.svg') }}" alt="Client partner logo">
                                        </div>
                                    </div>
                                    <!-- Comapany Support Logo End -->
    
                                    <!-- Company Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="{{ asset('images/company-logo-primary-5.svg') }}" alt="Client partner logo">
                                        </div>
                                    </div>
                                    <!-- Comapany Support Logo End -->
    
                                    <!-- Company Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="company-supports-logo">
                                            <img src="{{ asset('images/company-logo-primary-3.svg') }}" alt="Client partner logo">
                                        </div>
                                    </div>
                                    <!-- Comapany Support Logo End -->
                                </div>
                            </div>
                        </div>
                        <!-- Comapany Support Slider End -->
                    </div>
                    <!-- Approach Comapany Slider Box End -->
                </div>
                --}}
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Our Advantage Us Section Start -->
    <div class="our-advantage">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Advantage</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Your Source for Pure, Fresh, and Honestly Made Chakki Atta</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Advantage Boxes Start -->
                    <div class="our-advantage-boxes">
                        <!-- Our Advantage Box Start -->
                        <div class="our-advantage-box wow fadeInUp">
                            <!-- Our Advantage Box Body Start -->
                            <div class="our-advantage-box-body">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-our-advantage-1.svg') }}" alt="Pure Quality Produce icon">
                                </div>                                
                                <div class="our-advantage-box-content">
                                    <h3>Pure Quality Produce</h3>
                                    <p>We make atta from pure wheat grain, using natural and careful methods.</p>
                                </div>
                            </div>
                            <!-- Our Advantage Box Body End -->                       
                        </div>
                        <!-- Our Advantage Box End -->

                        <!-- Our Advantage Box 2 Start -->
                        <div class="our-advantage-image box-2 wow fadeInUp" data-wow-delay="0.2s">
                            <figure class="image-anime">
                                <img src="{{ asset('images/our-advantage-wheat-farm.jpg') }}" alt="Golden wheat field harvest for pure chakki atta">
                            </figure>
                        </div>
                        <!-- Our Advantage Box 2 End -->

                        <!-- Our Advantage Box 3 Start -->
                        <div class="our-advantage-image box-3 wow fadeInUp" data-wow-delay="0.4s">
                            <figure class="image-anime">
                                <img src="{{ asset('images/our-advantage-chakki-atta.jpg') }}" alt="Fresh stone ground chakki atta flour">
                            </figure>
                        </div>
                        <!-- Our Advantage Box 3 End -->

                        <!-- Our Advantage Box Start -->
                        <div class="our-advantage-box wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Our Advantage Header Start -->
                            <div class="our-advantage-header">
                                <div class="our-advantage-counter-box">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-our-advantage-2.svg') }}" alt="Years of Experience icon">
                                    </div>                                
                                    <div class="our-advantage-counter-content">
                                        <h2><span class="counter">25</span>+</h2>
                                    </div>
                                </div>

                                <div class="our-advantage-header-content">
                                    <h3>Years of Experience</h3>
                                </div>
                            </div>
                            <!-- Our Advantage Header End -->

                            <!-- Our Advantage Box Footre Start -->
                            <div class="our-advantage-box-footer">
                                <p>We keep improving our grinding and quality process with every batch.</p>
                                <ul>
                                    <li>Eco-Friendly Farming Practices</li>
                                    <li>Trusted Wheat Sourcing</li>
                                </ul>
                            </div> 
                            <!-- Our Advantage Box Footer End -->                             
                        </div>
                        <!-- Our Advantage Box End -->
                    </div>
                    <!-- Our Advantage Boxes End -->
                </div>


            </div>
        </div>
    </div>
    <!-- Our Advantage Section End -->

    <!-- How It Work Section Start -->
    <div class="how-it-work bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">How It Works</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">See How We Bring Fresh, Organic Goodness to Your Kitchen</h2>
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
                                    <img src="{{ asset('images/how-it-work-wheat-selection.webp') }}" alt="Wheat Selection for Raghuvir chakki atta" width="155" height="155" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Wheat Selection</h3>
                                    <p>Pure selected wheat grains.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Pure Selected Wheat Grains</li>
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
                                    <img src="{{ asset('images/how-it-work-cleaning.webp') }}" alt="Cleaning and dust impurity removal" width="155" height="155" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Cleaning</h3>
                                    <p>Multi-stage dust and impurity removal.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Multi-Stage Impurity Removal</li>
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
                                    <img src="{{ asset('images/how-it-work-chakki-grinding.webp') }}" alt="Slow traditional stone chakki grinding" width="155" height="155" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Chakki Grinding</h3>
                                    <p>Slow, traditional stone grinding.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Slow Stone Chakki Grinding</li>
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
                                    <img src="{{ asset('images/how-it-work-quality-check.webp') }}" alt="Moisture and purity quality check" width="155" height="155" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Quality Check</h3>
                                    <p>Moisture and purity tested.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Moisture and Purity Tested</li>
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
                                    <img src="{{ asset('images/how-it-work-packaging.webp') }}" alt="Food-grade airtight moisture-lock packaging" width="155" height="155" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <div class="how-work-item-body">
                                <div class="how-work-item-content">
                                    <h3>Packaging</h3>
                                    <p>Food-grade airtight bags.</p>
                                </div>
                                <div class="how-work-item-list">
                                    <ul>
                                        <li>Food-Grade Airtight Bags</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- How Work Item End -->
                    </div>
                    <!-- How Work Step Box End -->
                </div>    
            </div>
        </div>
    </div>
    <!-- How It Work Section End -->

    {{-- Our Team Section Hidden (uncomment when real team info is ready)
    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Meet Our Team</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Meet the People Behind Every Pack of Raghuvir Atta</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Content Button Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Our team's knowledge, hard work and care are in every packet. From wheat selection to quality check and delivery, everyone works with responsibility.</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('team') }}" class="btn-default">View All Team</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Section Content Button End -->
                </div>
            </div>

            <div class="row">
                <!-- TODO: replace stock names and photos with the real team (name + role). -->
                <div class="col-xl-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-item-image">
                            <a href="{{ route('team-details') }}" class="image-anime" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('images/team-1.jpg') }}" alt="Raghuvir production and quality team member">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
                
                        <!-- Team Body Start -->
                        <div class="team-item-body">
                            <div class="team-item-content">
                                <h2><a href="{{ route('team-details') }}">Jacob Jones</a></h2>
                                <p>Agronomist</p>
                            </div>
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- team Image Start -->
                        <div class="team-item-image">
                            <a href="{{ route('team-details') }}" class="image-anime" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('images/team-2.jpg') }}" alt="Raghuvir production and quality team member">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
                
                        <!-- Team Body Start -->
                        <div class="team-item-body">
                            <div class="team-item-content">
                                <h2><a href="{{ route('team-details') }}">Ralph Edwards</a></h2>
                                <p>Farm Manager</p>
                            </div>
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- team Image Start -->
                        <div class="team-item-image">
                            <a href="{{ route('team-details') }}" class="image-anime" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('images/team-3.jpg') }}" alt="Raghuvir production and quality team member">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
                
                        <!-- Team Body Start -->
                        <div class="team-item-body">
                            <div class="team-item-content">
                                <h2><a href="{{ route('team-details') }}">Guy Hawkins</a></h2>
                                <p>Sustainability Coordinator</p>
                            </div>
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- team Image Start -->
                        <div class="team-item-image">
                            <a href="{{ route('team-details') }}" class="image-anime" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('images/team-4.jpg') }}" alt="Raghuvir production and quality team member">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->
                
                        <!-- Team Body Start -->
                        <div class="team-item-body">
                            <div class="team-item-content">
                                <h2><a href="{{ route('team-details') }}">Arlene McCoy</a></h2>
                                <p>Head Farmer</p>
                            </div>
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/author-1.jpg') }}" alt="Client testimonial avatar">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <i><img src="{{ asset('images/icon-phone-primary.svg') }}" alt="Phone icon"></i>
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->    
                        <p>Let's make something great work together. <a href="{{ route('contact') }}">Get Free Quote</a></p>                         
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->
    --}}

    {{-- Our Testimonials Section Hidden (uncomment when real testimonials are ready)
    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Testimonials</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Genuine Testimonials Reflecting Our Quality and Trust</h2>
                    </div>
                    <!-- Section Title End -->
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <!-- TODO: replace with real customer reviews. -->
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/our-testimonials-image-1.jpg') }}" alt="Customer feedback photo">
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
                                                    <img src="{{ asset('images/testimonial-item-quote.svg') }}" alt="Testimonial quote icon">
                                                </div>
                                            </div>                                         
                                            <div class="testimonial-item-content">
                                                <h3>“[Customer review goes here]”</h3>
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
                                                <img src="{{ asset('images/our-testimonials-image-2.jpg') }}" alt="Customer feedback photo">
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
                                                    <img src="{{ asset('images/testimonial-item-quote.svg') }}" alt="Testimonial quote icon">
                                                </div>
                                            </div>                                         
                                            <div class="testimonial-item-content">
                                                <h3>“[Customer review goes here]”</h3>
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
                                                <img src="{{ asset('images/our-testimonials-image-3.jpg') }}" alt="Customer feedback photo">
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
                                                    <img src="{{ asset('images/testimonial-item-quote.svg') }}" alt="Testimonial quote icon">
                                                </div>
                                            </div>                                         
                                            <div class="testimonial-item-content">
                                                <h3>“[Customer review goes here]”</h3>
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
                                                <img src="{{ asset('images/our-testimonials-image-4.jpg') }}" alt="Customer feedback photo">
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
                                                    <img src="{{ asset('images/testimonial-item-quote.svg') }}" alt="Testimonial quote icon">
                                                </div>
                                            </div>                                         
                                            <div class="testimonial-item-content">
                                                <h3>“[Customer review goes here]”</h3>
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

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
                        <p><span>Trust</span> Where Experiences Speak Louder - <a href="{{ route('contact') }}">Discover Why Customers Love Us!</a></p>

                        <!-- TODO: show a real rating only if it is true. -->
                        <ul>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li>Trusted by families across Gujarat</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->
    --}}

    <!-- Our Faqs Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">                
                <div class="col-xl-7">
                    <!-- Faqs Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Frequently Asked Questions</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Simple, Clear Answers to Help You Understand Our Work</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Who is Raghuvir Foods and what do you make?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Raghuvir Foods is a hygienic chakki atta brand from Gandhinagar, Gujarat. We make Whole Wheat Atta, Bati Atta and Wheat Bran.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Does your atta contain any chemicals or additives?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Our atta is made from 100% pure wheat, with no artificial colour, bleaching or preservatives.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        How do you keep the atta fresh during delivery?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>The atta is packed in food-grade, moisture-lock bags and dispatched within 24-48 hours of order.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Do you accept bulk orders?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes. Bulk supply is available for homes, shops, hotels and restaurants. Call us for rates.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        How do you check the wheat quality?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" role="region" aria-labelledby="heading5" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Wheat is cleaned before grinding, and the finished atta is checked for moisture and purity.</p>
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
                                <img src="{{ asset('images/faqs-doorstep-delivery.jpg') }}" alt="Doorstep delivery of fresh Raghuvir Special Bati Atta to Indian family">
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

    <!-- Main Footer End -->
@endsection
