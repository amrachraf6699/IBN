<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EgyMedia - Leading Media & Technology Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
</head>
<body class="font-sans text-dark">
    <!-- Progress Bar -->
    <div class="progress-bar"></div>

    <!-- Header/Navbar -->
    <header id="header" class="fixed w-full top-0 left-0 z-50 transition-all duration-300 bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="#" class="flex items-center space-x-2">
                    <div class="relative h-10 w-10">
                        <div class="absolute inset-0 bg-primary rounded-full opacity-80"></div>
                        <div class="absolute inset-1 bg-dark rounded-full flex items-center justify-center text-white font-bold">
                            E
                        </div>
                    </div>
                    <span class="text-2xl font-bold text-dark">Egy<span class="text-primary">Media</span></span>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="text-dark hover:text-primary transition-colors duration-300 relative group">
                        Services
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#partners" class="text-dark hover:text-primary transition-colors duration-300 relative group">
                        Partners
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#team" class="text-dark hover:text-primary transition-colors duration-300 relative group">
                        Our Team
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#careers" class="text-dark hover:text-primary transition-colors duration-300 relative group">
                        Careers
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#contact" class="text-dark hover:text-primary transition-colors duration-300 relative group">
                        Contact Us
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    
                    <!-- Language Switch -->
                    <button class="flex items-center text-dark hover:text-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        <span>EN</span>
                    </button>
                </nav>
                
                <!-- Contact Button (Visible on desktop) -->
                <div class="hidden md:block">
                    <a href="#contact" class="btn-contact px-6 py-2 bg-primary text-white rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        Get in Touch
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
                <a href="#services" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">Services</a>
                <a href="#partners" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">Partners</a>
                <a href="#team" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">Our Team</a>
                <a href="#careers" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">Careers</a>
                <a href="#contact" class="text-dark hover:text-primary transition-colors duration-300 py-2 border-b border-gray-100">Contact Us</a>
                
                <!-- Language Switcher (Mobile) -->
                <button class="flex items-center text-dark hover:text-primary transition-colors duration-300 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <span>EN</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen pt-20 overflow-hidden pattern-background">
        <div class="absolute inset-0 bg-dark bg-opacity-90"></div>
        
        <!-- Animated Elements -->
        <div class="absolute top-20 left-1/4 w-64 h-64 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
        <div class="absolute bottom-20 right-1/3 w-80 h-80 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10" style="animation: float 4s ease-in-out infinite reverse"></div>
        
        <div class="container mx-auto px-4 pt-32 pb-20 relative z-10">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 lg:pr-12 mb-12 lg:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 opacity-0 animate-slide-up" style="animation-delay: 0.3s">
                        Transforming <span class="text-primary relative">Media<span class="absolute bottom-2 left-0 h-2 w-full bg-primary opacity-20"></span></span> for the 
                        <span class="relative inline-block">
                            <span class="text-primary">Digital Age</span>
                            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 100 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 5 Q 25 0, 50 5 Q 75 10, 100 5" stroke="#b32025" stroke-width="2" fill="none"/>
                            </svg>
                        </span>
                    </h1>
                    
                    <p class="text-light text-lg md:text-xl mb-8 max-w-lg opacity-0 animate-fade-in" style="animation-delay: 0.6s">
                        EgyMedia delivers cutting-edge media solutions and technology services that transform businesses and connect brands with their audiences in meaningful ways.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 opacity-0 animate-slide-right" style="animation-delay: 0.9s">
                        <a href="#contact" class="btn-contact px-8 py-3 bg-primary text-white rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg text-center relative overflow-hidden">
                            <span class="relative z-10">Start Your Project</span>
                        </a>
                        <a href="#services" class="px-8 py-3 border-2 border-white text-white rounded-full hover:bg-white hover:text-dark transition-all duration-300 text-center">
                            Our Services
                        </a>
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative opacity-0 animate-scale-in" style="animation-delay: 0.8s">
                    <div class="relative">
                        <!-- Decorative elements -->
                        <div class="absolute -top-4 -left-4 w-32 h-32 border-2 border-primary rounded-lg"></div>
                        <div class="absolute -bottom-4 -right-4 w-32 h-32 border-2 border-primary rounded-lg"></div>
                        
                        <div class="rounded-lg overflow-hidden shadow-2xl relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary/30 to-dark/30 mix-blend-multiply"></div>
                            <img src="https://picsum.photos/600/400?/800x500" alt="EgyMedia Technology" class="w-full h-auto">
                        </div>
                    </div>
                    
                    <!-- Floating stats -->
                    <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-lg shadow-xl has-scroll-effects">
                        <div class="flex items-center">
                            <div class="text-4xl font-bold text-primary mr-3">15+</div>
                            <div class="text-sm">Years of <br>Excellence</div>
                        </div>
                    </div>
                    
                    <div class="absolute -top-6 -right-6 bg-white p-4 rounded-lg shadow-xl has-scroll-effects">
                        <div class="flex items-center">
                            <div class="text-4xl font-bold text-primary mr-3">200+</div>
                            <div class="text-sm">Projects <br>Delivered</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-20 pt-10 border-t border-white/10 opacity-0 animate-fade-in" style="animation-delay: 1.2s">
            </div>
        </div>
        
        <!-- Wave separator -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,128L48,128C96,128,192,128,288,154.7C384,181,480,235,576,229.3C672,224,768,160,864,144C960,128,1056,160,1152,176C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>
    
    <!-- About Us Section -->
    <section id="about" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    WHO WE ARE
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">About <span class="text-primary">EgyMedia</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    We're a leading media technology company with a mission to transform how businesses connect with their audiences.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="scroll-trigger">
                    <div class="relative">
                        <div class="bg-primary/10 absolute -top-6 -left-6 w-full h-full rounded-lg"></div>
                        <div class="relative rounded-lg overflow-hidden">
                            <img src="https://picsum.photos/600/400?/600x400" alt="About EgyMedia" class="w-full h-auto">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary/40 to-dark/40 opacity-0 hover:opacity-100 transition-all duration-500"></div>
                        </div>
                        
                        <!-- Experience badge -->
                        <div class="absolute -bottom-8 -right-8 bg-primary text-white p-6 rounded-full shadow-lg flex items-center justify-center flex-col transform hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl font-bold">15+</span>
                            <span class="text-xs uppercase tracking-wider">Years</span>
                        </div>
                    </div>
                </div>
                
                <div class="scroll-trigger">
                    <h3 class="text-2xl font-bold text-dark mb-4 relative">
                        Pioneering Media Tech Excellence Since 2008
                        <span class="absolute -bottom-2 left-0 h-1 w-16 bg-primary"></span>
                    </h3>
                    <p class="text-gray-600 mb-6">
                        Founded in 2008, EgyMedia has established itself as a leader in media production and technology solutions in the Middle East and North Africa. Our team of creative professionals and technical experts work together to deliver exceptional results for our clients.
                    </p>
                    <p class="text-gray-600 mb-8">
                        We believe in the power of storytelling and innovative technology to transform businesses and connect them with their audience in meaningful ways. Our commitment to excellence and innovation has earned us the trust of leading brands across various industries.
                    </p>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="text-center p-4 bg-gray-50 rounded-lg hover-lift">
                            <div class="text-primary text-4xl font-bold mb-1 count-up" data-target="200">0</div>
                            <p class="text-gray-600 text-sm">Projects Completed</p>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg hover-lift">
                            <div class="text-primary text-4xl font-bold mb-1 count-up" data-target="50">0</div>
                            <p class="text-gray-600 text-sm">Team Members</p>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg hover-lift">
                            <div class="text-primary text-4xl font-bold mb-1 count-up" data-target="30">0</div>
                            <p class="text-gray-600 text-sm">Awards Won</p>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg hover-lift">
                            <div class="text-primary text-4xl font-bold mb-1 count-up" data-target="12">0</div>
                            <p class="text-gray-600 text-sm">Countries Served</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50 clip-path-diagonal">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    WHAT WE DO
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">Our <span class="text-primary">Services</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    We offer comprehensive media and technology solutions tailored to your business needs.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Media Production</h3>
                        <p class="text-gray-600 mb-6">
                            Professional video and audio production services for commercials, documentaries, training videos, and social media content.
                        </p>
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                High-quality video production
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Professional editing services
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Sound design and mixing
                            </li>
                        </ul>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Web Development</h3>
                        <p class="text-gray-600 mb-6">
                            Custom websites and web applications designed to meet your specific business needs and goals.
                        </p>
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Responsive website design
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                E-commerce solutions
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Content management systems
                            </li>
                        </ul>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Mobile App Development</h3>
                        <p class="text-gray-600 mb-6">
                            Native and cross-platform mobile applications for iOS and Android devices.
                        </p>
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                iOS and Android applications
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Cross-platform development
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                App maintenance and support
                            </li>
                        </ul>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Brand Strategy</h3>
                        <p class="text-gray-600 mb-6">
                            Comprehensive brand development and marketing strategies that drive results.
                        </p>
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Brand identity development
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Marketing strategy
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Brand positioning
                            </li>
                        </ul>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service 5 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Digital Marketing</h3>
                        <p class="text-gray-600 mb-6">
                            Strategic digital marketing campaigns to build your brand and engage your audience.
                        </p>
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Social media marketing
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Search engine optimization
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Paid advertising campaigns
                            </li>
                        </ul>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service 6 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Data Analytics</h3>
                        <p class="text-gray-600 mb-6">
                            Data-driven analytics and insights to help you make informed business decisions.
                        </p>
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Performance analytics
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                User behavior tracking
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Conversion optimization
                            </li>
                        </ul>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Partners/Clients Section -->
    <section id="partners" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    OUR PARTNERS
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">Trusted by <span class="text-primary">Leading Brands</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    We've had the privilege of working with some of the most innovative and forward-thinking companies.
                </p>
            </div>
            
            <!-- Partners grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8">
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                    <img src="https://picsum.photos/600/400?/200x80" alt="Partner Logo" class="max-h-12">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Team Members Section -->
    <section id="team" class="py-20 bg-gray-50 clip-path-slant">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    OUR EXPERTS
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">Meet Our <span class="text-primary">Team</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    Our diverse team of experts brings together skills in media, technology, design, and strategy.
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="team-card scroll-trigger">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/400x500" alt="Team Member" class="w-full h-80 object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end justify-center p-6">
                                <div class="flex space-x-4">
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark">Ahmed Mahmoud</h3>
                            <p class="text-primary font-medium mb-3">CEO & Founder</p>
                            <p class="text-gray-600 text-sm">
                                With over 15 years of experience in media and technology, Ahmed leads our team with vision and expertise.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-card scroll-trigger">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/400x500" alt="Team Member" class="w-full h-80 object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end justify-center p-6">
                                <div class="flex space-x-4">
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark">Nour Ibrahim</h3>
                            <p class="text-primary font-medium mb-3">Creative Director</p>
                            <p class="text-gray-600 text-sm">
                                Award-winning creative director with a passion for storytelling and visual design.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-card scroll-trigger">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/400x500" alt="Team Member" class="w-full h-80 object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end justify-center p-6">
                                <div class="flex space-x-4">
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark">Omar Khalid</h3>
                            <p class="text-primary font-medium mb-3">Technical Director</p>
                            <p class="text-gray-600 text-sm">
                                Expert in web and mobile development with a focus on innovative solutions.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-card scroll-trigger">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/400x500" alt="Team Member" class="w-full h-80 object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end justify-center p-6">
                                <div class="flex space-x-4">
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark">Sara Ahmed</h3>
                            <p class="text-primary font-medium mb-3">Marketing Director</p>
                            <p class="text-gray-600 text-sm">
                                Strategic marketing professional with expertise in digital and traditional channels.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 scroll-trigger">
                <a href="#careers" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    Join Our Team
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Portfolio/Projects Section -->
    <section id="projects" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    OUR WORK
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">Featured <span class="text-primary">Projects</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    Explore our portfolio of successful projects across various industries.
                </p>
            </div>
            
            <!-- Project Filter -->
            <div class="flex flex-wrap justify-center mb-12 scroll-trigger">
                <button class="project-filter-btn active m-2 px-6 py-2 rounded-full bg-primary text-white hover:bg-opacity-90 transition-all duration-300" data-filter="all">All</button>
                <button class="project-filter-btn m-2 px-6 py-2 rounded-full bg-gray-200 text-dark hover:bg-primary hover:text-white transition-all duration-300" data-filter="web">Web</button>
                <button class="project-filter-btn m-2 px-6 py-2 rounded-full bg-gray-200 text-dark hover:bg-primary hover:text-white transition-all duration-300" data-filter="mobile">Mobile</button>
                <button class="project-filter-btn m-2 px-6 py-2 rounded-full bg-gray-200 text-dark hover:bg-primary hover:text-white transition-all duration-300" data-filter="video">Video</button>
                <button class="project-filter-btn m-2 px-6 py-2 rounded-full bg-gray-200 text-dark hover:bg-primary hover:text-white transition-all duration-300" data-filter="branding">Branding</button>
            </div>
            
            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-item scroll-trigger" data-category="web">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover-lift">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/600x400" alt="Project" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-semibold text-primary px-3 py-1 bg-primary/10 rounded-full">Web Development</span>
                                <span class="text-xs text-gray-500">2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-dark mb-2">E-commerce Platform</h3>
                            <p class="text-gray-600 text-sm">
                                A custom e-commerce solution for a leading fashion retailer with integrated payment and inventory systems.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="project-item scroll-trigger" data-category="mobile">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover-lift">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/600x400" alt="Project" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-semibold text-primary px-3 py-1 bg-primary/10 rounded-full">Mobile App</span>
                                <span class="text-xs text-gray-500">2023</span>
                            </div>
                            <h3 class="text-xl font-bold text-dark mb-2">Health & Fitness App</h3>
                            <p class="text-gray-600 text-sm">
                                A comprehensive health and fitness mobile application with personalized workout plans and nutrition tracking.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="project-item scroll-trigger" data-category="video">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover-lift">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/600x400" alt="Project" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-semibold text-primary px-3 py-1 bg-primary/10 rounded-full">Video Production</span>
                                <span class="text-xs text-gray-500">2022</span>
                            </div>
                            <h3 class="text-xl font-bold text-dark mb-2">National Tourism Campaign</h3>
                            <p class="text-gray-600 text-sm">
                                A comprehensive video campaign showcasing Egypt's tourism destinations for the Ministry of Tourism.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="project-item scroll-trigger" data-category="branding">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover-lift">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/600x400" alt="Project" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-semibold text-primary px-3 py-1 bg-primary/10 rounded-full">Brand Strategy</span>
                                <span class="text-xs text-gray-500">2022</span>
                            </div>
                            <h3 class="text-xl font-bold text-dark mb-2">Financial Services Rebrand</h3>
                            <p class="text-gray-600 text-sm">
                                Complete rebranding for a financial services company, including visual identity, messaging, and marketing materials.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 5 -->
                <div class="project-item scroll-trigger" data-category="web">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover-lift">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/600x400" alt="Project" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-semibold text-primary px-3 py-1 bg-primary/10 rounded-full">Web Development</span>
                                <span class="text-xs text-gray-500">2021</span>
                            </div>
                            <h3 class="text-xl font-bold text-dark mb-2">Corporate Intranet Portal</h3>
                            <p class="text-gray-600 text-sm">
                                A secure and user-friendly intranet portal for a multinational corporation with 5,000+ employees.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 6 -->
                <div class="project-item scroll-trigger" data-category="mobile">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover-lift">
                        <div class="relative">
                            <img src="https://picsum.photos/600/400?/600x400" alt="Project" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-semibold text-primary px-3 py-1 bg-primary/10 rounded-full">Mobile App</span>
                                <span class="text-xs text-gray-500">2021</span>
                            </div>
                            <h3 class="text-xl font-bold text-dark mb-2">Food Delivery Platform</h3>
                            <p class="text-gray-600 text-sm">
                                A comprehensive food delivery platform with real-time tracking, payment integration, and restaurant management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 scroll-trigger">
                <a href="#" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    View All Projects
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- News/Latest Updates Section -->
    <section id="news" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    LATEST UPDATES
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">News & <span class="text-primary">Insights</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    Stay updated with the latest news, insights, and trends in media and technology.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- News Item 1 -->
                <div class="news-card bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="relative">
                        <img src="https://picsum.photos/600/400?/600x400" alt="News" class="w-full h-48 object-cover">
                        <div class="news-overlay absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 flex items-center justify-center">
                            <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>May 15, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-2">EgyMedia Wins Best Digital Agency Award</h3>
                        <p class="text-gray-600 mb-4">
                            EgyMedia was recognized as the Best Digital Agency at the annual Digital Excellence Awards ceremony.
                        </p>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Read Full Article
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- News Item 2 -->
                <div class="news-card bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="relative">
                        <img src="https://picsum.photos/600/400?/600x400" alt="News" class="w-full h-48 object-cover">
                        <div class="news-overlay absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 flex items-center justify-center">
                            <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>April 28, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-2">The Future of Digital Marketing in 2023</h3>
                        <p class="text-gray-600 mb-4">
                            Explore the latest trends and technologies shaping the future of digital marketing in 2023 and beyond.
                        </p>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Read Full Article
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- News Item 3 -->
                <div class="news-card bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="relative">
                        <img src="https://picsum.photos/600/400?/600x400" alt="News" class="w-full h-48 object-cover">
                        <div class="news-overlay absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 flex items-center justify-center">
                            <a href="#" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>March 12, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-2">EgyMedia Expands Operations to Gulf Region</h3>
                        <p class="text-gray-600 mb-4">
                            EgyMedia announces expansion of its operations to the Gulf region with a new office in Dubai.
                        </p>
                        <a href="#" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            Read Full Article
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 scroll-trigger">
                <a href="#" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    View All News
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-dark text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    GET IN TOUCH
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-white">Contact <span class="text-primary">Us</span></h2>
                <p class="text-light max-w-2xl mx-auto mt-4">
                    Have a project in mind? Get in touch with our team to discuss how we can help you achieve your goals.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="scroll-trigger">
                    <form class="bg-white/5 backdrop-blur-sm p-8 rounded-xl border border-white/10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-light mb-2">Name</label>
                                <input type="text" id="name" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-white" placeholder="Your Name">
                            </div>
                            <div>
                                <label for="email" class="block text-light mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-white" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-light mb-2">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-white" placeholder="Subject">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-light mb-2">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-white" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary hover:bg-opacity-90 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-300 relative overflow-hidden btn-ripple">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <div class="scroll-trigger">
                    <div class="bg-white/5 backdrop-blur-sm p-8 rounded-xl border border-white/10 h-full">
                        <h3 class="text-2xl font-semibold text-white mb-6">Get In Touch</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="text-primary mr-4 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Address</h4>
                                    <p class="text-light/80">123 Business Street, Cairo, Egypt</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-primary mr-4 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Email</h4>
                                    <p class="text-light/80">info@egymedia.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-primary mr-4 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Phone</h4>
                                    <p class="text-light/80">+20 123 456 7890</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-primary mr-4 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Working Hours</h4>
                                    <p class="text-light/80">Monday - Friday: 9:00 AM - 6:00 PM</p>
                                    <p class="text-light/80">Saturday: 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h4 class="text-lg font-semibold text-white mb-4">Follow Us</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-footer text-white py-12 border-t border-white/10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <a href="#" class="flex items-center mb-6">
                        <span class="text-2xl font-bold text-white">Egy<span class="text-primary">Media</span></span>
                    </a>
                    <p class="text-light/80 mb-6">
                        EgyMedia delivers cutting-edge media production and digital solutions that help businesses connect with their audience and achieve their goals.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-primary transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-primary transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-primary transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-primary transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-light/80 hover:text-primary transition-colors duration-300">Home</a></li>
                        <li><a href="#about" class="text-light/80 hover:text-primary transition-colors duration-300">About Us</a></li>
                        <li><a href="#services" class="text-light/80 hover:text-primary transition-colors duration-300">Services</a></li>
                        <li><a href="#projects" class="text-light/80 hover:text-primary transition-colors duration-300">Projects</a></li>
                        <li><a href="#team" class="text-light/80 hover:text-primary transition-colors duration-300">Our Team</a></li>
                        <li><a href="#news" class="text-light/80 hover:text-primary transition-colors duration-300">News</a></li>
                        <li><a href="#contact" class="text-light/80 hover:text-primary transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Our Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-light/80 hover:text-primary transition-colors duration-300">Media Production</a></li>
                        <li><a href="#" class="text-light/80 hover:text-primary transition-colors duration-300">Web Development</a></li>
                        <li><a href="#" class="text-light/80 hover:text-primary transition-colors duration-300">Mobile Development</a></li>
                        <li><a href="#" class="text-light/80 hover:text-primary transition-colors duration-300">Brand Strategy</a></li>
                        <li><a href="#" class="text-light/80 hover:text-primary transition-colors duration-300">Digital Marketing</a></li>
                        <li><a href="#" class="text-light/80 hover:text-primary transition-colors duration-300">Data Analytics</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Newsletter</h3>
                    <p class="text-light/80 mb-4">
                        Subscribe to our newsletter to receive the latest updates and news.
                    </p>
                    <form class="mb-4">
                        <div class="flex">
                            <input type="email" placeholder="Your Email" class="w-full px-4 py-2 bg-white/10 border border-white/20 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary text-white">
                            <button type="submit" class="bg-primary hover:bg-opacity-90 text-white px-4 py-2 rounded-r-lg transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <p class="text-light/60 text-sm">
                        By subscribing, you agree to our Privacy Policy and consent to receive updates from our company.
                    </p>
                </div>
            </div>
            
            <div class="border-t border-white/10 mt-12 pt-8 text-center">
                <p class="text-light/80">&copy; 2023 EgyMedia. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-primary hover:bg-opacity-90 text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>
    
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
                header.classList.remove('bg-white', 'shadow-md');
                header.classList.add('bg-transparent');
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