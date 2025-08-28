<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBN - Integrated Business Networks | Global Tech Solutions</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Custom Styles -->
    <style>
        :root {
            --primary-blue: #1E3A8A;
            --primary-orange: #F97316;
            --light-blue: #60A5FA;
            --dark-gray: #111827;
            --light-gray: #F3F4F6;
        }
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }
        
        .ibn-logo {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 2rem;
        }
        
        .ibn-i, .ibn-n {
            color: var(--primary-orange);
        }
        
        .ibn-b {
            color: var(--primary-blue);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--light-blue) 100%);
        }
        
.hero-overlay {
    background: rgba(0, 0, 0, 0.05);
}

        
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }
        
        .loader.hidden {
            opacity: 0;
            pointer-events: none;
        }
        
        .loader-logo {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
        
        .counter {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-orange);
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        
        .client-logo {
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }
        
        .client-logo:hover {
            filter: grayscale(0%);
        }
        
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .accordion-content.active {
            max-height: 200px;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--primary-orange);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1000;
        }
        
        .back-to-top.visible {
            opacity: 1;
        }
        
        .swiper-pagination-bullet-active {
            background: var(--primary-orange) !important;
        }
        
        .swiper-button-next,
        .swiper-button-prev {
            color: var(--primary-orange) !important;
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    <!-- Loader -->
    <div class="loader" id="loader">
        <div class="loader-logo ibn-logo mb-4">
            <span class="ibn-i">I</span><span class="ibn-b">B</span><span class="ibn-n">N</span>
        </div>
        <div class="text-blue-900 font-medium">Loading...</div>
        <div class="w-32 h-1 bg-gray-200 rounded-full mt-4 overflow-hidden">
            <div class="h-full bg-orange-500 rounded-full animate-pulse"></div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="{{ asset('imgs/logo.jpg') }}" alt="IBN Logo" class="h-14 w-14 mr-3">
                    <div class="ml-2 text-sm text-blue-900 font-medium hidden sm:block">Integrated Business Networks</div>
                </div>
                
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#home" class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="#services" class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Services</a>
                        <a href="#blog" class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Blog</a>
                        <a href="#news" class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">News</a>
                        <a href="#clients" class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Clients</a>
                        <a href="#awards" class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Awards</a>
                        <a href="#contact" class="text-gray-700 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-orange-500 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
                <a href="#home" class="text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#services" class="text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium">Services</a>
                <a href="#blog" class="text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium">Blog</a>
                <a href="#news" class="text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium">News</a>
                <a href="#clients" class="text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium">Clients</a>
                <a href="#awards" class="text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium">Awards</a>
                <a href="#contact" class="text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Slider -->
@php
  $horizontalMap = ['left' => 'flex-start', 'center' => 'center', 'right' => 'flex-end'];
  $verticalMap = ['top' => 'flex-start', 'center' => 'center', 'bottom' => 'flex-end'];
@endphp
@if($sliders->count() > 0)
<section id="home" class="relative h-screen">
  <div class="swiper hero-swiper h-full">
    <div class="swiper-wrapper">
      @foreach ($sliders as $slider)
        <div class="swiper-slide relative">
          <img src="{{ $slider->image_url ?? 'https://placehold.co/600x400?height=800&width=1920' }}" alt="{{ $slider->title ?? 'Slider Image' }}" class="w-full h-full object-cover">

          <div class="hero-overlay absolute inset-0 bg-black bg-opacity-5"></div>

          <div
            class="absolute inset-0 flex text-white"
            style="
              justify-content: {{ $horizontalMap[$slider->text_horizontally] ?? 'center' }};
              align-items: {{ $verticalMap[$slider->text_vertically] ?? 'center' }};
            "
          >
            <div class="max-w-4xl px-4 text-center" style="color: {{ $slider->text_color ?? '#ffffff' }};">
              <h1 class="text-5xl md:text-7xl font-bold mb-6 fade-in-up">{{ $slider->title }}</h1>
              <p class="text-xl md:text-2xl mb-8 fade-in-up">{{ $slider->subtitle }}</p>

              @if($slider->button_text && $slider->button_link)
                <div
                  class="inline-block"
                  style="
                    width: fit-content;
                    display: flex;
                    justify-content: {{ $horizontalMap[$slider->button_horizontally] ?? 'center' }};
                    align-items: {{ $verticalMap[$slider->button_vertically] ?? 'center' }};
                    margin-left: auto;
                    margin-right: auto;
                  "
                >
                  <a href="{{ $slider->button_link }}" target="_blank" rel="noopener"
                    class="px-8 py-4 rounded-lg text-lg font-semibold transition-colors fade-in-up"
                    style="background-color:#F97316; color: {{ $slider->button_color ?? '#ffffff' }};"
                  >
                    {{ $slider->button_text }}
                  </a>
                </div>
              @endif
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
@endif



    <!-- About Us -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">About IBN</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        IBN connects businesses worldwide with cutting-edge technology solutions. We specialize in creating integrated networks that drive innovation, enhance productivity, and deliver measurable results for enterprises across all industries.
                    </p>
                    <p class="text-lg text-gray-600 mb-8">
                        Our mission is to bridge the gap between traditional business operations and modern technological capabilities, ensuring our clients stay ahead in an increasingly connected world.
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://placehold.co/600x400?height=40&width=40" alt="Global" class="w-10 h-10">
                        <span class="text-blue-900 font-semibold">Global Connectivity</span>
                    </div>
                </div>
                <div>
                    <img src="https://placehold.co/600x400?height=500&width=600" alt="About IBN" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-20 gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
                <div class="stat-item">
                    <img src="https://placehold.co/600x400?height=60&width=60" alt="Experience" class="w-15 h-15 mx-auto mb-4">
                    <div class="counter" data-target="10">0</div>
                    <div class="text-lg font-medium">Years Experience</div>
                </div>
                <div class="stat-item">
                    <img src="https://placehold.co/600x400?height=60&width=60" alt="Clients" class="w-15 h-15 mx-auto mb-4">
                    <div class="counter" data-target="500">0</div>
                    <div class="text-lg font-medium">Happy Clients</div>
                </div>
                <div class="stat-item">
                    <img src="https://placehold.co/600x400?height=60&width=60" alt="Projects" class="w-15 h-15 mx-auto mb-4">
                    <div class="counter" data-target="1000">0</div>
                    <div class="text-lg font-medium">Projects Completed</div>
                </div>
                <div class="stat-item">
                    <img src="https://placehold.co/600x400?height=60&width=60" alt="Satisfaction" class="w-15 h-15 mx-auto mb-4">
                    <div class="counter" data-target="99">0</div>
                    <div class="text-lg font-medium">% Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive technology solutions tailored to your business needs</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card bg-white p-8 rounded-lg shadow-lg border border-gray-100">
                    <img src="https://placehold.co/600x400?height=80&width=80" alt="Cloud Solutions" class="w-20 h-20 mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Cloud Solutions</h3>
                    <p class="text-gray-600 mb-6">Scalable cloud infrastructure and migration services for modern businesses.</p>
                    <button class="text-orange-500 hover:text-orange-600 font-semibold">Learn More →</button>
                </div>
                
                <div class="service-card bg-white p-8 rounded-lg shadow-lg border border-gray-100">
                    <img src="https://placehold.co/600x400?height=80&width=80" alt="Cybersecurity" class="w-20 h-20 mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Cybersecurity</h3>
                    <p class="text-gray-600 mb-6">Advanced security solutions to protect your digital assets and data.</p>
                    <button class="text-orange-500 hover:text-orange-600 font-semibold">Learn More →</button>
                </div>
                
                <div class="service-card bg-white p-8 rounded-lg shadow-lg border border-gray-100">
                    <img src="https://placehold.co/600x400?height=80&width=80" alt="AI Solutions" class="w-20 h-20 mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">AI & Machine Learning</h3>
                    <p class="text-gray-600 mb-6">Intelligent automation and AI-powered business solutions.</p>
                    <button class="text-orange-500 hover:text-orange-600 font-semibold">Learn More →</button>
                </div>
                
                <div class="service-card bg-white p-8 rounded-lg shadow-lg border border-gray-100">
                    <img src="https://placehold.co/600x400?height=80&width=80" alt="Data Analytics" class="w-20 h-20 mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Data Analytics</h3>
                    <p class="text-gray-600 mb-6">Transform your data into actionable insights and strategic advantages.</p>
                    <button class="text-orange-500 hover:text-orange-600 font-semibold">Learn More →</button>
                </div>
                
                <div class="service-card bg-white p-8 rounded-lg shadow-lg border border-gray-100">
                    <img src="https://placehold.co/600x400?height=80&width=80" alt="Network Infrastructure" class="w-20 h-20 mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Network Infrastructure</h3>
                    <p class="text-gray-600 mb-6">Robust network solutions for seamless connectivity and performance.</p>
                    <button class="text-orange-500 hover:text-orange-600 font-semibold">Learn More →</button>
                </div>
                
                <div class="service-card bg-white p-8 rounded-lg shadow-lg border border-gray-100">
                    <img src="https://placehold.co/600x400?height=80&width=80" alt="Digital Transformation" class="w-20 h-20 mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Digital Transformation</h3>
                    <p class="text-gray-600 mb-6">Complete digital transformation strategies for competitive advantage.</p>
                    <button class="text-orange-500 hover:text-orange-600 font-semibold">Learn More →</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section id="clients" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Trusted by Industry Leaders</h2>
                <p class="text-xl text-gray-600">We're proud to work with some of the world's most innovative companies</p>
            </div>
            
            <div class="swiper clients-swiper">
                <div class="swiper-wrapper items-center">
                    <div class="swiper-slide flex justify-center">
                        <img src="https://placehold.co/600x400?height=80&width=160" alt="Client 1" class="client-logo h-20 w-auto">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://placehold.co/600x400?height=80&width=160" alt="Client 2" class="client-logo h-20 w-auto">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://placehold.co/600x400?height=80&width=160" alt="Client 3" class="client-logo h-20 w-auto">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://placehold.co/600x400?height=80&width=160" alt="Client 4" class="client-logo h-20 w-auto">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://placehold.co/600x400?height=80&width=160" alt="Client 5" class="client-logo h-20 w-auto">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://placehold.co/600x400?height=80&width=160" alt="Client 6" class="client-logo h-20 w-auto">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://placehold.co/600x400?height=80&width=160" alt="Client 7" class="client-logo h-20 w-auto">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://placehold.co/600x400?height=80&width=160" alt="Client 8" class="client-logo h-20 w-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards -->
    <section id="awards" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Awards & Recognition</h2>
                <p class="text-xl text-gray-600">Celebrating our achievements and industry recognition</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <img src="https://placehold.co/600x400?height=100&width=100" alt="Best Tech Company 2023" class="w-25 h-25 mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Best Tech Company 2023</h3>
                    <p class="text-gray-600 mb-2">Tech Innovation Awards</p>
                    <p class="text-sm text-blue-900 font-semibold">2023</p>
                </div>
                
                <div class="text-center p-6">
                    <img src="https://placehold.co/600x400?height=100&width=100" alt="Excellence in Cloud Solutions" class="w-25 h-25 mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Excellence in Cloud Solutions</h3>
                    <p class="text-gray-600 mb-2">Cloud Computing Excellence</p>
                    <p class="text-sm text-blue-900 font-semibold">2022</p>
                </div>
                
                <div class="text-center p-6">
                    <img src="https://placehold.co/600x400?height=100&width=100" alt="Cybersecurity Leader" class="w-25 h-25 mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Cybersecurity Leader</h3>
                    <p class="text-gray-600 mb-2">Security Excellence Awards</p>
                    <p class="text-sm text-blue-900 font-semibold">2022</p>
                </div>
                
                <div class="text-center p-6">
                    <img src="https://placehold.co/600x400?height=100&width=100" alt="Innovation Award" class="w-25 h-25 mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Innovation Award</h3>
                    <p class="text-gray-600 mb-2">Business Innovation Summit</p>
                    <p class="text-sm text-blue-900 font-semibold">2021</p>
                </div>
                
                <div class="text-center p-6">
                    <img src="https://placehold.co/600x400?height=100&width=100" alt="Client Satisfaction" class="w-25 h-25 mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Client Satisfaction Excellence</h3>
                    <p class="text-gray-600 mb-2">Customer Service Awards</p>
                    <p class="text-sm text-blue-900 font-semibold">2021</p>
                </div>
                
                <div class="text-center p-6">
                    <img src="https://placehold.co/600x400?height=100&width=100" alt="Rising Star" class="w-25 h-25 mx-auto mb-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Rising Star Company</h3>
                    <p class="text-gray-600 mb-2">Tech Startup Awards</p>
                    <p class="text-sm text-blue-900 font-semibold">2020</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News -->
    <section id="news" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Latest News</h2>
                <p class="text-xl text-gray-600">Stay updated with our latest announcements and industry insights</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/600x400?height=200&width=400" alt="AI Breakthrough" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">December 15, 2023</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">IBN Launches Revolutionary AI Platform</h3>
                        <p class="text-gray-600 mb-4">Our new AI platform is set to transform how businesses approach automation and decision-making...</p>
                        <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">Read More →</a>
                    </div>
                </article>
                
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/600x400?height=200&width=400" alt="Security Partnership" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">December 10, 2023</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Strategic Partnership with Global Security Leader</h3>
                        <p class="text-gray-600 mb-4">IBN announces partnership to enhance cybersecurity offerings for enterprise clients...</p>
                        <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">Read More →</a>
                    </div>
                </article>
                
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/600x400?height=200&width=400" alt="Cloud Expansion" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">December 5, 2023</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud Infrastructure Expansion Across Asia</h3>
                        <p class="text-gray-600 mb-4">IBN expands cloud services to new markets, bringing advanced solutions closer to clients...</p>
                        <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">Read More →</a>
                    </div>
                </article>
                
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/600x400?height=200&width=400" alt="Sustainability" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">November 28, 2023</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">IBN Commits to Carbon Neutral Operations</h3>
                        <p class="text-gray-600 mb-4">Our comprehensive sustainability initiative aims to achieve carbon neutrality by 2025...</p>
                        <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">Read More →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Tech Insights Blog</h2>
                <p class="text-xl text-gray-600">Expert insights and thought leadership from our team</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                    <img src="https://placehold.co/600x400?height=200&width=400" alt="AI Future" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <img src="https://placehold.co/600x400?height=40&width=40" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Sarah Chen</div>
                                <div class="text-xs text-gray-500">December 12, 2023</div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">The Future of AI in Business Operations</h3>
                        <p class="text-gray-600 mb-4">Exploring how artificial intelligence is reshaping business processes and creating new opportunities...</p>
                        <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">Read More →</a>
                    </div>
                </article>
                
                <article class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                    <img src="https://placehold.co/600x400?height=200&width=400" alt="Cloud Security" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <img src="https://placehold.co/600x400?height=40&width=40" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Michael Rodriguez</div>
                                <div class="text-xs text-gray-500">December 8, 2023</div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud Security Best Practices for 2024</h3>
                        <p class="text-gray-600 mb-4">Essential security measures every organization should implement when moving to the cloud...</p>
                        <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">Read More →</a>
                    </div>
                </article>
                
                <article class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                    <img src="https://placehold.co/600x400?height=200&width=400" alt="Digital Transformation" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <img src="https://placehold.co/600x400?height=40&width=40" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Emily Johnson</div>
                                <div class="text-xs text-gray-500">December 3, 2023</div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Building a Successful Digital Transformation Strategy</h3>
                        <p class="text-gray-600 mb-4">Key steps and considerations for organizations embarking on their digital transformation journey...</p>
                        <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">Read More →</a>
                    </div>
                </article>
                
                <article class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                    <img src="https://placehold.co/600x400?height=200&width=400" alt="Data Analytics" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <img src="https://placehold.co/600x400?height=40&width=40" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <div class="text-sm font-semibold text-gray-900">David Kim</div>
                                <div class="text-xs text-gray-500">November 29, 2023</div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Data Analytics Trends Shaping 2024</h3>
                        <p class="text-gray-600 mb-4">The latest trends in data analytics and how they're transforming business intelligence...</p>
                        <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold">Read More →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                <p class="text-xl text-gray-600">Hear from the businesses we've helped transform</p>
            </div>
            
            <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-2xl mx-auto">
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/600x400?height=20&width=100" alt="5 stars" class="h-5">
                            </div>
                            <p class="text-lg text-gray-600 mb-6 italic">"IBN transformed our entire IT infrastructure. Their expertise in cloud solutions helped us reduce costs by 40% while improving performance significantly."</p>
                            <img src="https://placehold.co/600x400?height=80&width=80" alt="John Smith" class="w-20 h-20 rounded-full mx-auto mb-4">
                            <h4 class="text-xl font-bold text-gray-900">John Smith</h4>
                            <p class="text-gray-600">CEO, TechCorp Industries</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-2xl mx-auto">
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/600x400?height=20&width=100" alt="5 stars" class="h-5">
                            </div>
                            <p class="text-lg text-gray-600 mb-6 italic">"The cybersecurity solutions provided by IBN gave us peace of mind. Their proactive approach prevented multiple potential threats."</p>
                            <img src="https://placehold.co/600x400?height=80&width=80" alt="Maria Garcia" class="w-20 h-20 rounded-full mx-auto mb-4">
                            <h4 class="text-xl font-bold text-gray-900">Maria Garcia</h4>
                            <p class="text-gray-600">CTO, SecureFinance Ltd</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-2xl mx-auto">
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/600x400?height=20&width=100" alt="5 stars" class="h-5">
                            </div>
                            <p class="text-lg text-gray-600 mb-6 italic">"IBN's AI solutions revolutionized our customer service. We've seen a 60% improvement in response times and customer satisfaction."</p>
                            <img src="https://placehold.co/600x400?height=80&width=80" alt="Robert Chen" class="w-20 h-20 rounded-full mx-auto mb-4">
                            <h4 class="text-xl font-bold text-gray-900">Robert Chen</h4>
                            <p class="text-gray-600">Director of Operations, GlobalRetail</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-2xl mx-auto">
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/600x400?height=20&width=100" alt="5 stars" class="h-5">
                            </div>
                            <p class="text-lg text-gray-600 mb-6 italic">"Working with IBN was a game-changer for our digital transformation. Their team's expertise and support were exceptional throughout the process."</p>
                            <img src="https://placehold.co/600x400?height=80&width=80" alt="Lisa Thompson" class="w-20 h-20 rounded-full mx-auto mb-4">
                            <h4 class="text-xl font-bold text-gray-900">Lisa Thompson</h4>
                            <p class="text-gray-600">VP of Technology, InnovateNow</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-2xl mx-auto">
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/600x400?height=20&width=100" alt="5 stars" class="h-5">
                            </div>
                            <p class="text-lg text-gray-600 mb-6 italic">"IBN's data analytics platform provided insights we never knew we needed. Our decision-making process has become much more data-driven and effective."</p>
                            <img src="https://placehold.co/600x400?height=80&width=80" alt="Alex Johnson" class="w-20 h-20 rounded-full mx-auto mb-4">
                            <h4 class="text-xl font-bold text-gray-900">Alex Johnson</h4>
                            <p class="text-gray-600">Data Manager, AnalyticsPro</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-8"></div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Get answers to common questions about our services</p>
            </div>
            
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg">
                    <button class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" data-target="faq1">
                        <span class="text-lg font-semibold text-gray-900">What services does IBN offer?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq1" class="accordion-content px-6 pb-4">
                        <p class="text-gray-600">IBN offers comprehensive technology solutions including cloud infrastructure, cybersecurity, AI & machine learning, data analytics, network infrastructure, and digital transformation services. We specialize in creating integrated business networks that drive innovation and growth.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" data-target="faq2">
                        <span class="text-lg font-semibold text-gray-900">How long does a typical project take?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq2" class="accordion-content px-6 pb-4">
                        <p class="text-gray-600">Project timelines vary depending on scope and complexity. Simple implementations may take 2-4 weeks, while comprehensive digital transformations can take 3-6 months. We provide detailed project timelines during our initial consultation phase.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" data-target="faq3">
                        <span class="text-lg font-semibold text-gray-900">Do you provide ongoing support?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq3" class="accordion-content px-6 pb-4">
                        <p class="text-gray-600">Yes, we offer comprehensive ongoing support and maintenance services. Our support packages include 24/7 monitoring, regular updates, troubleshooting, and performance optimization to ensure your systems run smoothly.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" data-target="faq4">
                        <span class="text-lg font-semibold text-gray-900">What industries do you serve?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq4" class="accordion-content px-6 pb-4">
                        <p class="text-gray-600">We serve clients across various industries including finance, healthcare, manufacturing, retail, education, and government. Our solutions are tailored to meet the specific needs and compliance requirements of each industry.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" data-target="faq5">
                        <span class="text-lg font-semibold text-gray-900">How do you ensure data security?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq5" class="accordion-content px-6 pb-4">
                        <p class="text-gray-600">We implement enterprise-grade security measures including encryption, multi-factor authentication, regular security audits, and compliance with industry standards like ISO 27001, SOC 2, and GDPR. Security is integrated into every aspect of our solutions.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" data-target="faq6">
                        <span class="text-lg font-semibold text-gray-900">Can you work with our existing systems?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq6" class="accordion-content px-6 pb-4">
                        <p class="text-gray-600">Absolutely. We specialize in integrating new solutions with existing systems to minimize disruption and maximize ROI. Our team conducts thorough assessments to ensure seamless integration and optimal performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-orange-500">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl text-white mb-8">Let's discuss how IBN can help you achieve your technology goals and drive innovation in your organization.</p>
            <button class="bg-white text-orange-500 hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors">Get Started Today</button>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <p class="text-xl text-gray-600">Ready to start your digital transformation journey? Contact us today.</p>
            </div>
            
            <form id="contact-form" class="max-w-2xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                    <input type="text" id="company" name="company" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                
                <div class="mb-6">
                    <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                    <select id="service" name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <option value="">Select a service</option>
                        <option value="cloud">Cloud Solutions</option>
                        <option value="cybersecurity">Cybersecurity</option>
                        <option value="ai">AI & Machine Learning</option>
                        <option value="analytics">Data Analytics</option>
                        <option value="network">Network Infrastructure</option>
                        <option value="transformation">Digital Transformation</option>
                    </select>
                </div>
                
                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                    <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"></textarea>
                    <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors">Send Message</button>
                </div>
                
                <div id="form-success" class="text-green-600 text-center mt-4 hidden">
                    <p>Thank you for your message! We'll get back to you soon.</p>
                </div>
                
                <div id="form-error" class="text-red-600 text-center mt-4 hidden">
                    <p>There was an error sending your message. Please try again.</p>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('imgs/logo.jpg') }}" alt="IBN Logo" class="h-8 w-8 mr-3">
                        <div class="ibn-logo text-white">
                            <span class="ibn-i">I</span><span class="ibn-b">B</span><span class="ibn-n">N</span>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4 max-w-md">Integrated Business Networks - Connecting enterprises worldwide with cutting-edge technology solutions for innovation, reliability, and growth.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">
                            <img src="https://placehold.co/600x400?height=24&width=24" alt="Twitter" class="w-6 h-6">
                        </a>
                        <a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">
                            <img src="https://placehold.co/600x400?height=24&width=24" alt="LinkedIn" class="w-6 h-6">
                        </a>
                        <a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">
                            <img src="https://placehold.co/600x400?height=24&width=24" alt="Facebook" class="w-6 h-6">
                        </a>
                        <a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">
                            <img src="https://placehold.co/600x400?height=24&width=24" alt="Instagram" class="w-6 h-6">
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">Cloud Solutions</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">Cybersecurity</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">AI & Machine Learning</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">Data Analytics</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">Network Infrastructure</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">News</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-orange-500 transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-300 text-sm">&copy; 2023 IBN - Integrated Business Networks. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-300 hover:text-orange-500 text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-300 hover:text-orange-500 text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-300 hover:text-orange-500 text-sm transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="back-to-top">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Loader
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.classList.add('hidden');
            }, 1000);
        });

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Hero Swiper
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Clients Swiper
        const clientsSwiper = new Swiper('.clients-swiper', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 2,
            spaceBetween: 30,
            breakpoints: {
                640: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });

        // Testimonials Swiper
        const testimonialsSwiper = new Swiper('.testimonials-swiper', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            spaceBetween: 30,
        });

        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.ceil(current);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
            });
        }

        // Intersection Observer for Counter Animation
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.counter').closest('section');
        if (statsSection) {
            observer.observe(statsSection);
        }

        // FAQ Accordion
        const accordionButtons = document.querySelectorAll('.accordion-button');
        
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const target = document.getElementById(this.getAttribute('data-target'));
                const icon = this.querySelector('svg');
                
                // Close all other accordions
                accordionButtons.forEach(otherButton => {
                    if (otherButton !== this) {
                        const otherTarget = document.getElementById(otherButton.getAttribute('data-target'));
                        const otherIcon = otherButton.querySelector('svg');
                        otherTarget.classList.remove('active');
                        otherIcon.classList.remove('rotate-180');
                    }
                });
                
                // Toggle current accordion
                target.classList.toggle('active');
                icon.classList.toggle('rotate-180');
            });
        });

        // Contact Form Validation
        const contactForm = document.getElementById('contact-form');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear previous errors
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(msg => {
                msg.classList.add('hidden');
                msg.textContent = '';
            });
            
            let isValid = true;
            
            // Validate name
            const name = document.getElementById('name');
            if (!name.value.trim()) {
                showError(name, 'Name is required');
                isValid = false;
            }
            
            // Validate email
            const email = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.value.trim()) {
                showError(email, 'Email is required');
                isValid = false;
            } else if (!emailRegex.test(email.value)) {
                showError(email, 'Please enter a valid email address');
                isValid = false;
            }
            
            // Validate message
            const message = document.getElementById('message');
            if (!message.value.trim()) {
                showError(message, 'Message is required');
                isValid = false;
            }
            
            if (isValid) {
                // Simulate form submission
                const successMessage = document.getElementById('form-success');
                const errorMessage = document.getElementById('form-error');
                
                // Hide error message
                errorMessage.classList.add('hidden');
                
                // Show success message
                successMessage.classList.remove('hidden');
                
                // Reset form
                contactForm.reset();
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.add('hidden');
                }, 5000);
            }
        });
        
        function showError(input, message) {
            const errorDiv = input.parentNode.querySelector('.error-message');
            if (errorDiv) {
                errorDiv.textContent = message;
                errorDiv.classList.remove('hidden');
            }
        }

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Navbar Background on Scroll
        const navbar = document.querySelector('nav');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });
    </script>
</body>
</html>