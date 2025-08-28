@php
$settings = settings();
@endphp
@props(['title' => 'Home'])
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->name }} | {{ $title }}</title>
    <meta name="description" content="{{ $settings->description }}">
    <meta name="keywords" content="{{ $settings->keywords }}">
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#b32025',
                        dark: '#222222',
                        light: '#d1d5db',
                        footer: '#1f2937',
                    },
                    fontFamily: {
                        sans: ['Changa', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                        'slide-right': 'slideRight 0.8s ease-out forwards',
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'scale-in': 'scaleIn 0.8s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(50px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        slideRight: {
                            '0%': { transform: 'translateX(-50px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        scaleIn: {
                            '0%': { transform: 'scale(0.95)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom styles beyond Tailwind */
        .scroll-trigger {
            opacity: 0;
            transition: all 0.8s ease;
        }
        
        .scroll-trigger.visible {
            opacity: 1;
        }
        
        .text-shadow {
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .clip-path-diagonal {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }

        .clip-path-slant {
            clip-path: polygon(0 0, 100% 15%, 100% 100%, 0 85%);
        }
        
        .hover-scale {
            transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .hover-scale:hover {
            transform: scale(1.03);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .gradient-overlay {
            background: linear-gradient(to bottom right, rgba(179, 32, 37, 0.9), rgba(34, 34, 34, 0.95));
        }
        
        .pattern-background {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23b32025' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        
        .circle-clip {
            clip-path: circle(48% at 50% 50%);
        }
        
        .ripple {
            position: absolute;
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.8s linear;
            background-color: rgba(255, 255, 255, 0.3);
        }
        
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
        
        .has-scroll-effects {
            transform: translateY(40px);
            opacity: 0;
            transition: all 1s ease;
        }
        
        .has-scroll-effects.is-visible {
            transform: translateY(0);
            opacity: 1;
        }
        
        .news-card:hover .news-overlay {
            opacity: 1;
        }
        
        .news-overlay {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        /* Custom progress bar */
        .progress-bar {
            height: 3px;
            background-color: #b32025;
            position: fixed;
            top: 0;
            left: 0;
            width: 0;
            transition: width 0.3s ease-out;
            z-index: 100;
        }
    </style>
    
<style>
/* Additional CSS for enhanced map styling */
.location-section {
    position: relative;
}

.location-section::before {
    content: '';
    position: absolute;
    top: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 20px;
    background: linear-gradient(to bottom, transparent, #your-primary-color);
}

/* Smooth transitions for interactive elements */
.location-section iframe {
    transition: all 0.3s ease;
}

.location-section:hover iframe {
    transform: scale(1.02);
}

/* Custom loading animation */
@keyframes pulse {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}

#map-loading {
    animation: pulse 2s infinite;
}

/* Responsive enhancements */
@media (max-width: 768px) {
    .location-section .flex-row {
        flex-direction: column;
    }
}
</style>
</head>
<body class="font-sans text-dark">
    <!-- Progress Bar -->
    <div class="progress-bar"></div>
    <x-frontend.floating-whatsapp ></x-frontend.floating-whatsapp>

    <!-- Header/Navbar -->
<header id="header" class="fixed w-full top-0 left-0 z-50 transition-all duration-300 bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-2 rtl:space-x-reverse">
                    <div class="relative h-16 w-16">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="h-full w-full object-contain">
                    </div>
                    <span class="text-2xl font-bold text-dark">{{ __('frontend.egy') }}<span class="text-primary">{{ __('frontend.media') }}</span></span>
                </a>                
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8 rtl:space-x-reverse">
                    <a href="{{ route('home') }}" class="text-dark hover:text-primary transition-colors duration-300 relative group {{ request()->routeIs('home') ? 'text-primary' : '' }}">
                        {{ __('frontend.home') }}
                        <span class="absolute bottom-0 left-0 rtl:left-auto rtl:right-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('about_us') }}" class="text-dark hover:text-primary transition-colors duration-300 relative group {{ request()->routeIs('about_us') ? 'text-primary' : '' }}">
                        {{ __('frontend.about_us') }}
                        <span class="absolute bottom-0 left-0 rtl:left-auto rtl:right-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('services') }}" class="text-dark hover:text-primary transition-colors duration-300 relative group {{ request()->routeIs('services') ? 'text-primary' : '' }}">
                        {{ __('frontend.services') }}
                        <span class="absolute bottom-0 left-0 rtl:left-auto rtl:right-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('partners') }}" class="text-dark hover:text-primary transition-colors duration-300 relative group {{ request()->routeIs('partners') ? 'text-primary' : '' }}">
                        {{ __('frontend.partners') }}
                        <span class="absolute bottom-0 left-0 rtl:left-auto rtl:right-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('jobs') }}" class="text-dark hover:text-primary transition-colors duration-300 relative group {{ request()->routeIs('jobs') ? 'text-primary' : '' }}">
                        {{ __('frontend.jobs') }}
                        <span class="absolute bottom-0 left-0 rtl:left-auto rtl:right-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('our_team') }}" class="text-dark hover:text-primary transition-colors duration-300 relative group {{ request()->routeIs('our_team') ? 'text-primary' : '' }}">
                        {{ __('frontend.our_team') }}
                        <span class="absolute bottom-0 left-0 rtl:left-auto rtl:right-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    
                    <!-- Language Switch -->
                    <a href={{ route('lang.switch' , app()->getLocale() == 'ar' ? 'en' : 'ar') }} class="text-dark hover:text-primary transition-colors duration-300 relative group {{ request()->routeIs('lang.switch') ? 'text-primary' : '' }}">
                    <span class="absolute bottom-0 left-0 rtl:left-auto rtl:right-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    <button class="flex items-center text-dark hover:text-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 rtl:mr-0 rtl:ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        <span>{{ app()->getLocale() == 'ar' ? 'EN' : 'العربية' }}</span>
                    </button>
                    </a>
                </nav>
                
                <!-- Contact Button (Visible on desktop) -->
                <div class="md:block">
                    <a href="{{ route('contact_us') }}" class="btn-contact px-6 py-2 bg-primary text-white rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        {{ __('frontend.contact_us') }}
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-dark focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg border-t border-gray-100">
            <div class="container mx-auto px-4 py-3 flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">{{ __('frontend.home') }}</a>
                <a href="{{ route('about_us') }}" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">{{ __('frontend.about_us') }}</a>
                <a href="{{ route('services') }}" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">{{ __('frontend.services') }}</a>
                <a href="{{ route('partners') }}" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">{{ __('frontend.partners') }}</a>
                <a href="{{ route('jobs') }}" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">{{ __('frontend.jobs') }}</a>
                <a href="{{ route('our_team') }}" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">{{ __('frontend.our_team') }}</a>
                
                <!-- Language Switcher (Mobile) -->
                <a href={{ route('lang.switch' , app()->getLocale() == 'ar' ? 'en' : 'ar') }} class="text-dark hover:text-primary transition-colors duration-300 relative group {{ request()->routeIs('services') ? 'text-primary' : '' }}">
                    <button class="flex items-center text-dark hover:text-primary transition-colors duration-300 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 rtl:mr-0 rtl:ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        <span>{{ app()->getLocale() == 'ar' ? 'EN' : 'العربية' }}</span>
                    </button>
                </a>
            </div>
        </div>
    </header>

    <!-- Begin Content -->
    <div class="{{ request()->routeIs('home') ? '' : 'mt-[80px]' }}">
        {{ $slot }}
    </div>
    <!-- End Content -->

<!-- Footer -->

<!-- Footer -->
<footer class="bg-footer text-white py-12 border-t border-white/10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
            <!-- Company Info -->
            <div>
                <a href="#" class="flex items-center justify-center mb-6">
                    <span class="text-2xl font-bold text-white">Egy<span class="text-primary">Media</span></span>
                </a>
                <p class="text-light/80 mb-6">
                    {{ $settings->description }}
                </p>
                @php
                    $socialLinks = json_decode($settings->social_links , true);
                @endphp
                <div class="grid grid-flow-col auto-cols-max gap-6 justify-center">
                    <a href="{{ $socialLinks['facebook'] }}" target="__blank" class="text-white hover:text-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                    </a>
                    <a href="{{ $socialLinks['twitter'] }}" target="__blank" class="text-white hover:text-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="{{ $socialLinks['instagram'] }}" target="__blank" class="text-white hover:text-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    
                    <a href="{{ $socialLinks['linkedin'] }}" target="__blank" class="text-white hover:text-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Location with Map -->
            <div class="location-section">
                <h3 class="text-lg font-semibold text-white mb-6 flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    {{ __('frontend.our_location') }}
                </h3>
                
                <!-- Address Info -->
                <div class="bg-white/5 backdrop-blur-sm rounded-lg p-4 mb-4 border border-white/10">
                    <p class="text-light/90 text-sm leading-relaxed">
                        {{ $settings->address ?? 'القاهرة، مصر' }}
                    </p>
                </div>
                
                <!-- Interactive Map Container -->
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    
                    <!-- Map Frame -->
                    <div class="relative bg-white/5 backdrop-blur-sm rounded-xl p-2 border border-white/10 shadow-2xl">
                        <div class="w-full h-48 rounded-lg overflow-hidden relative">
                            <div class="absolute inset-0 bg-gray-800/50 flex items-center justify-center z-10" id="map-loading">
                                <div class="flex flex-col items-center gap-2">
                                    <div class="animate-spin rounded-full h-6 w-6 border-2 border-primary border-t-transparent"></div>
                                    <span class="text-xs text-light/70">{{ __('frontend.loading') }}</span>
                                </div>
                            </div>
                            
                            <iframe 
                                src="{{ $socialLinks['location'] }}"
                                width="100%" 
                                height="100%" 
                                style="border:0; filter: grayscale(30%) contrast(1.1);" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                onload="document.getElementById('map-loading').style.display='none'"
                                class="transition-all duration-300 hover:filter-none">
                            </iframe>
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                </div>
<!-- Action Buttons -->
<div class="flex justify-center gap-3 mt-4">
    <button onclick="navigator.geolocation.getCurrentPosition(function(position) { 
        const lat = position.coords.latitude; 
        const lng = position.coords.longitude; 
        window.open(`{{ $socialLinks['location'] }}`, '_blank'); 
    })" 
    class="flex items-center justify-center gap-2 bg-primary hover:bg-primary/80 text-white px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-primary/25 text-sm font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
        </svg>
        {{ __('frontend.view_on_google_maps') }}
    </button>

    <button onclick="navigator.geolocation.getCurrentPosition(function(position) { 
        const lat = position.coords.latitude; 
        const lng = position.coords.longitude; 
        window.open(`https://www.google.com/maps/dir/${lat},${lng}/{{ urlencode($settings->address ?? 'القاهرة، مصر') }}`, '_blank'); 
    })" 
    class="flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 text-white px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 border border-white/20 text-sm font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
        </svg>
        {{ __('frontend.get_directions') }}
    </button>
</div>

            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-6 flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    {{ __('frontend.quick_links') }}
                </h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-light/80 hover:text-primary transition-colors duration-300 flex items-center justify-center hover:translate-x-1 transform">{{ __('frontend.home') }}</a></li>
                    <li><a href="{{ route('services') }}" class="text-light/80 hover:text-primary transition-colors duration-300 flex items-center justify-center hover:translate-x-1 transform">{{ __('frontend.services') }}</a></li>
                    <li><a href="{{ route('partners') }}" class="text-light/80 hover:text-primary transition-colors duration-300 flex items-center justify-center hover:translate-x-1 transform">{{ __('frontend.partners') }}</a></li>
                    <li><a href="{{ route('jobs') }}" class="text-light/80 hover:text-primary transition-colors duration-300 flex items-center justify-center hover:translate-x-1 transform">{{ __('frontend.jobs') }}</a></li>
                    <li><a href="{{ route('our_team') }}" class="text-light/80 hover:text-primary transition-colors duration-300 flex items-center justify-center hover:translate-x-1 transform">{{ __('frontend.our_team') }}</a></li>
                    <li><a href="{{ route('about_us') }}" class="text-light/80 hover:text-primary transition-colors duration-300 flex items-center justify-center hover:translate-x-1 transform">{{ __('frontend.about_us') }}</a></li>
                    <li><a href="{{ route('contact_us') }}" class="text-light/80 hover:text-primary transition-colors duration-300 flex items-center justify-center hover:translate-x-1 transform">{{ __('frontend.contact_us') }}</a></li>
                </ul>
            </div>
            
        </div>
        
        <div class="border-t border-white/10 mt-12 pt-8">
            <div class="flex justify-between items-center">
                <div class="text-light/80">
                    {!! __('frontend.website_footer' , ['site_name' => $settings->name ]) !!}
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 left-1/2 transform -translate-x-1/2 bg-primary hover:bg-opacity-90 text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @session('success')
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "center", 
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){}
            }).showToast();
        </script>
    @endsession
    @session('error')
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "center", 
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(to right, #FF0000, #FF7F50)",
                },
                onClick: function(){}
            }).showToast();
        </script>
    @endsession
    
    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Sticky Header
        const header = document.getElementById('header');
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.classList.add('bg-white', 'shadow-md');
                header.classList.remove('bg-transparent');
            } else {
                header.classList.add('bg-white', 'shadow-md');
                header.classList.remove('bg-transparent');
            }
            
            lastScrollTop = scrollTop;
        });
        
        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Scroll Animations
        const scrollTriggers = document.querySelectorAll('.scroll-trigger');
        
        function checkScroll() {
            scrollTriggers.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementBottom = element.getBoundingClientRect().bottom;
                
                if (elementTop < window.innerHeight - 100 && elementBottom > 0) {
                    element.classList.add('visible');
                }
            });
        }
        
        window.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);
        window.addEventListener('resize', checkScroll);
        
        // Count Up Animation
        const countElements = document.querySelectorAll('.count-up');
        
        function animateCount(el) {
            const target = parseInt(el.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const step = target / (duration / 16); // 60fps
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    el.textContent = target;
                    clearInterval(timer);
                } else {
                    el.textContent = Math.floor(current);
                }
            }, 16);
        }
        
        function checkCountElements() {
            countElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                
                if (elementTop < window.innerHeight - 100 && !element.classList.contains('counted')) {
                    element.classList.add('counted');
                    animateCount(element);
                }
            });
        }
        
        window.addEventListener('scroll', checkCountElements);
        window.addEventListener('load', checkCountElements);
        
        // Project Filter
        const filterButtons = document.querySelectorAll('.project-filter-btn');
        const projectItems = document.querySelectorAll('.project-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active', 'bg-primary', 'text-white'));
                filterButtons.forEach(btn => btn.classList.add('bg-gray-200', 'text-dark'));
                
                // Add active class to clicked button
                button.classList.add('active', 'bg-primary', 'text-white');
                button.classList.remove('bg-gray-200', 'text-dark');
                
                const filter = button.getAttribute('data-filter');
                
                projectItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        
        // Button Ripple Effect
        const rippleButtons = document.querySelectorAll('.btn-ripple');
        
        rippleButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                const x = e.clientX - e.target.getBoundingClientRect().left;
                const y = e.clientY - e.target.getBoundingClientRect().top;
                
                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 800);
            });
        });
        
        // Progress Bar
        const progressBar = document.querySelector('.progress-bar');
        
        window.addEventListener('scroll', () => {
            const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollTop = document.documentElement.scrollTop;
            const width = (scrollTop / scrollHeight) * 100;
            
            progressBar.style.width = `${width}%`;
        });
    </script>
</body>
</html>