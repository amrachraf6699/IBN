@php
$settings = settings();
@endphp
<x-frontend.layouts.main :title="__('frontend.about_us')">

<!-- Enhanced with ultra-modern 3D perspective, advanced particle system, and interactive elements -->
<section class="relative py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 overflow-hidden perspective-1000">
    <!-- Advanced Floating Background Elements with 3D transforms -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Primary floating orbs with enhanced effects -->
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-[#213B75]/20 to-[#F29F05]/20 rounded-full blur-3xl animate-float opacity-60 hover:opacity-80 transition-opacity duration-1000" style="transform: rotateX(15deg) rotateY(25deg);"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-[#F29F05]/20 to-[#213B75]/20 rounded-full blur-3xl animate-float opacity-60" style="animation-delay: 2s; transform: rotateX(-15deg) rotateY(-25deg);"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-[#213B75]/10 to-[#F29F05]/10 rounded-full blur-2xl animate-float" style="animation-delay: 4s; transform: rotateX(10deg) rotateZ(15deg);"></div>
        
        <!-- Added geometric floating shapes for ultra-modern feel -->
        <div class="absolute top-20 right-20 w-32 h-32 border border-[#213B75]/20 rounded-2xl animate-float backdrop-blur-sm bg-white/10" style="animation-delay: 1s; transform: rotateX(45deg) rotateY(45deg) rotateZ(15deg);"></div>
        <div class="absolute bottom-32 left-32 w-24 h-24 border border-[#F29F05]/20 rounded-full animate-float backdrop-blur-sm bg-white/10" style="animation-delay: 3s; transform: rotateX(-30deg) rotateY(60deg);"></div>
        
        <!-- Added particle-like micro elements -->
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-[#213B75]/40 rounded-full animate-float" style="animation-delay: 0.5s;"></div>
        <div class="absolute top-3/4 right-1/4 w-3 h-3 bg-[#F29F05]/40 rounded-full animate-float" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-1/2 right-1/3 w-1 h-1 bg-[#213B75]/60 rounded-full animate-float" style="animation-delay: 2.5s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Enhanced header with 3D text effects and magnetic hover -->
        <div class="text-center mb-20 scroll-trigger animate-slide-up group">
            <span class="inline-block text-[#213B75] font-semibold mb-2 relative px-8 py-3 bg-white/90 backdrop-blur-md rounded-full border border-[#213B75]/30 animate-scale-in shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-500 group-hover:bg-white/95" style="animation-delay: 0.2s; transform-style: preserve-3d;">
                {{ __('frontend.about_us') }}
                <span class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 h-1 w-12 bg-gradient-to-r from-[#213B75] to-[#F29F05] rounded-full animate-slide-right shadow-lg" style="animation-delay: 0.5s;"></span>
                <!-- Added glowing effect -->
                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#213B75]/20 to-[#F29F05]/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </span>
            <h1 class="text-4xl md:text-6xl font-bold text-[#222222] mt-6 animate-fade-in hover:scale-105 transition-transform duration-500" style="animation-delay: 0.3s; text-shadow: 0 4px 20px rgba(33, 59, 117, 0.1);">
                {{ __('frontend.discover') }} <span class="text-transparent bg-gradient-to-r from-[#213B75] via-[#F29F05] to-[#213B75] bg-clip-text animate-pulse">{{ __('frontend.our_story') }}</span>
            </h1>
        </div>
        
        <!-- Ultra-enhanced Who We Are section with 3D card effects and magnetic interactions -->
        <div class="mb-20 scroll-trigger animate-slide-up" style="animation-delay: 0.4s;">
            <div class="relative group perspective-1000">
                <!-- Enhanced glow effects with multiple layers -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#213B75]/30 to-[#F29F05]/30 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-all duration-1000 animate-pulse"></div>
                <div class="absolute inset-0 bg-gradient-to-br from-[#F29F05]/20 to-[#213B75]/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-80 transition-all duration-700" style="animation-delay: 0.2s;"></div>
                
                <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl border border-white/30 hover:shadow-4xl transition-all duration-700 hover:scale-[1.03] group-hover:rotate-x-2 group-hover:rotate-y-1" style="transform-style: preserve-3d;">
                    <!-- Enhanced gradient top bar with animation -->
                    <div class="h-2 bg-gradient-to-r from-[#213B75] via-[#F29F05] to-[#213B75] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent animate-slide-right"></div>
                    </div>
                    
                    <div class="p-12 relative">
                        <!-- Enhanced icon with 3D effects and magnetic hover -->
                        <div class="flex items-center mb-8 animate-slide-right group/icon" style="animation-delay: 0.6s;">
                            <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-[#213B75]/30 to-[#F29F05]/30 backdrop-blur-md flex items-center justify-center mr-6 shadow-2xl hover:shadow-3xl hover:scale-110 hover:rotate-6 transition-all duration-500 group-hover/icon:rotate-12 group-hover/icon:scale-125" style="transform-style: preserve-3d;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#213B75] group-hover/icon:text-[#F29F05] transition-colors duration-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <!-- Added inner glow effect -->
                                <div class="absolute inset-2 rounded-2xl bg-gradient-to-br from-[#213B75]/20 to-[#F29F05]/20 opacity-0 group-hover/icon:opacity-100 transition-opacity duration-500"></div>
                            </div>
                            <h2 class="text-3xl md:text-5xl font-bold text-[#222222] hover:text-[#213B75] transition-colors duration-300" style="text-shadow: 0 2px 10px rgba(0,0,0,0.1);">{{ __('frontend.who_we_are') }}</h2>
                        </div>
                        
                        <!-- Enhanced text with better typography and hover effects -->
                        <div class="space-y-8 animate-fade-in" style="animation-delay: 0.8s;">
                            <p class="text-gray-700 leading-relaxed text-lg md:text-xl font-light hover:text-gray-900 transition-colors duration-300 hover:scale-[1.02] transform-gpu" style="line-height: 1.8;">
                                {{ __('frontend.about_description_1') }}
                            </p>
                            <p class="text-gray-700 leading-relaxed text-lg md:text-xl font-light hover:text-gray-900 transition-colors duration-300 hover:scale-[1.02] transform-gpu" style="line-height: 1.8;">
                                {{ __('frontend.about_description_2') }}
                            </p>
                        </div>
                        
                        <!-- Added floating accent elements -->
                        <div class="absolute top-4 right-4 w-16 h-16 bg-gradient-to-br from-[#F29F05]/10 to-[#213B75]/10 rounded-full blur-xl animate-float opacity-50"></div>
                        <div class="absolute bottom-4 left-4 w-12 h-12 bg-gradient-to-br from-[#213B75]/10 to-[#F29F05]/10 rounded-full blur-lg animate-float opacity-40" style="animation-delay: 2s;"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Ultra-enhanced Vision and Mission grid with advanced 3D effects -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
            <!-- Vision Section -->
            <div class="scroll-trigger animate-slide-up group perspective-1000" style="animation-delay: 0.5s;">
                <div class="relative group/card h-full">
                    <!-- Multiple layered glow effects -->
                    <div class="absolute inset-0 bg-gradient-to-br from-[#213B75]/30 to-[#213B75]/10 rounded-3xl blur-2xl opacity-0 group-hover/card:opacity-100 transition-all duration-1000"></div>
                    <div class="absolute inset-0 bg-gradient-to-tl from-[#F29F05]/20 to-transparent rounded-3xl blur-xl opacity-0 group-hover/card:opacity-60 transition-all duration-700" style="animation-delay: 0.3s;"></div>
                    
                    <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-xl border border-white/30 h-full hover:shadow-3xl transition-all duration-700 hover:scale-105 hover:-rotate-2 group-hover/card:rotate-x-5 group-hover/card:rotate-y-2" style="transform-style: preserve-3d;">
                        <!-- Enhanced animated gradient bar -->
                        <div class="h-2 bg-gradient-to-r from-[#213B75] to-[#213B75]/60 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent w-1/3 animate-slide-right"></div>
                        </div>
                        
                        <div class="p-10 relative">
                            <!-- Enhanced icon with magnetic effects -->
                            <div class="flex items-center mb-8 group/vision">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#213B75]/30 to-[#213B75]/20 backdrop-blur-md flex items-center justify-center mr-4 shadow-xl hover:shadow-2xl hover:scale-125 hover:rotate-12 transition-all duration-500 group-hover/vision:rotate-180" style="transform-style: preserve-3d;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#213B75] group-hover/vision:text-white transition-colors duration-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                    <!-- Added pulsing inner glow -->
                                    <div class="absolute inset-1 rounded-xl bg-[#213B75]/20 opacity-0 group-hover/vision:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-bold text-[#222222] hover:text-[#213B75] transition-colors duration-300">{{ __('frontend.our_vision') }}</h3>
                            </div>
                            
                            <!-- Enhanced content with interactive elements -->
                            <div class="flex items-start group/content">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-green-400 to-green-500 flex items-center justify-center mr-4 flex-shrink-0 shadow-lg hover:shadow-xl hover:scale-110 hover:rotate-12 transition-all duration-300 group-hover/content:animate-bounce">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-gray-700 leading-relaxed text-lg md:text-xl font-light hover:text-gray-900 transition-colors duration-300 hover:scale-[1.02] transform-gpu" style="line-height: 1.8;">
                                    {{ __('frontend.vision_text') }}
                                </p>
                            </div>
                            
                            <!-- Added floating decorative elements -->
                            <div class="absolute top-2 right-2 w-8 h-8 bg-[#213B75]/10 rounded-full animate-float opacity-60"></div>
                            <div class="absolute bottom-2 right-8 w-4 h-4 bg-[#F29F05]/20 rounded-full animate-float opacity-40" style="animation-delay: 1s;"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mission Section -->
            <div class="scroll-trigger animate-slide-up group perspective-1000" style="animation-delay: 0.7s;">
                <div class="relative group/card h-full">
                    <!-- Multiple layered glow effects -->
                    <div class="absolute inset-0 bg-gradient-to-bl from-[#F29F05]/30 to-[#F29F05]/10 rounded-3xl blur-2xl opacity-0 group-hover/card:opacity-100 transition-all duration-1000"></div>
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#213B75]/20 to-transparent rounded-3xl blur-xl opacity-0 group-hover/card:opacity-60 transition-all duration-700" style="animation-delay: 0.3s;"></div>
                    
                    <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-xl border border-white/30 h-full hover:shadow-3xl transition-all duration-700 hover:scale-105 hover:rotate-2 group-hover/card:rotate-x-5 group-hover/card:rotate-y-2" style="transform-style: preserve-3d;">
                        <!-- Enhanced animated gradient bar -->
                        <div class="h-2 bg-gradient-to-r from-[#F29F05] to-[#F29F05]/60 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent w-1/3 animate-slide-right" style="animation-delay: 0.5s;"></div>
                        </div>
                        
                        <div class="p-10 relative">
                            <!-- Enhanced icon with magnetic effects -->
                            <div class="flex items-center mb-8 group/mission">
                                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#F29F05]/30 to-[#F29F05]/20 backdrop-blur-md flex items-center justify-center mr-4 shadow-xl hover:shadow-2xl hover:scale-125 hover:rotate-12 transition-all duration-500 group-hover/mission:rotate-180" style="transform-style: preserve-3d;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#F29F05] group-hover/mission:text-white transition-colors duration-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                    </svg>
                                    <!-- Added pulsing inner glow -->
                                    <div class="absolute inset-1 rounded-xl bg-[#F29F05]/20 opacity-0 group-hover/mission:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-bold text-[#222222] hover:text-[#F29F05] transition-colors duration-300">{{ __('frontend.our_mission') }}</h3>
                            </div>
                            
                            <!-- Enhanced content with interactive elements -->
                            <div class="flex items-start group/content">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-green-400 to-green-500 flex items-center justify-center mr-4 flex-shrink-0 shadow-lg hover:shadow-xl hover:scale-110 hover:rotate-12 transition-all duration-300 group-hover/content:animate-bounce">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-gray-700 leading-relaxed text-lg md:text-xl font-light hover:text-gray-900 transition-colors duration-300 hover:scale-[1.02] transform-gpu" style="line-height: 1.8;">
                                    {{ __('frontend.mission_text') }}
                                </p>
                            </div>
                            
                            <!-- Added floating decorative elements -->
                            <div class="absolute top-2 right-2 w-8 h-8 bg-[#F29F05]/10 rounded-full animate-float opacity-60"></div>
                            <div class="absolute bottom-2 right-8 w-4 h-4 bg-[#213B75]/20 rounded-full animate-float opacity-40" style="animation-delay: 1s;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ultra-enhanced contact section with 3D transforms and magnetic effects -->
        <div class="scroll-trigger animate-slide-up group perspective-1000" style="animation-delay: 0.9s;">
            <div class="relative group/contact">
                <!-- Multiple layered background effects -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#213B75]/20 via-[#F29F05]/20 to-[#213B75]/20 rounded-3xl blur-3xl opacity-0 group-hover/contact:opacity-100 transition-all duration-1000"></div>
                <div class="absolute inset-0 bg-gradient-to-br from-[#F29F05]/10 via-transparent to-[#213B75]/10 rounded-3xl blur-2xl opacity-0 group-hover/contact:opacity-80 transition-all duration-700" style="animation-delay: 0.2s;"></div>
                
                <div class="relative bg-white/85 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl border border-white/30 hover:shadow-4xl transition-all duration-700 group-hover/contact:scale-[1.02] group-hover/contact:rotate-x-1" style="transform-style: preserve-3d;">
                    <!-- Enhanced animated gradient top bar -->
                    <div class="h-2 bg-gradient-to-r from-[#213B75] via-[#F29F05] to-[#213B75] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/50 to-transparent w-1/4 animate-slide-right"></div>
                        <div class="absolute inset-0 bg-gradient-to-l from-transparent via-white/30 to-transparent w-1/4 animate-slide-right" style="animation-delay: 1s;"></div>
                    </div>
                    
                    <div class="p-12 relative">
                        <!-- Enhanced Contact Information Grid with 3D effects -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">
                            <!-- Address -->
                            <div class="text-center group/address animate-scale-in perspective-500" style="animation-delay: 1.1s;">
                                <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-[#213B75]/30 to-[#213B75]/20 backdrop-blur-md flex items-center justify-center mx-auto mb-6 shadow-xl group-hover/address:shadow-2xl group-hover/address:scale-125 group-hover/address:rotate-12 group-hover/address:-translate-y-2 transition-all duration-500" style="transform-style: preserve-3d;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#213B75] group-hover/address:text-white transition-colors duration-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    <!-- Added inner glow effect -->
                                    <div class="absolute inset-2 rounded-2xl bg-[#213B75]/20 opacity-0 group-hover/address:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </div>
                                <h4 class="text-xl md:text-2xl font-bold text-[#222222] mb-3 hover:text-[#213B75] transition-colors duration-300">{{ __('frontend.address') }}</h4>
                                <p class="text-gray-600 font-light text-lg hover:text-gray-800 transition-colors duration-300">{{ $settings->address }}</p>
                            </div>

                            <!-- Email -->
                            <div class="text-center group/email animate-scale-in perspective-500" style="animation-delay: 1.3s;">
                                <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-[#F29F05]/30 to-[#F29F05]/20 backdrop-blur-md flex items-center justify-center mx-auto mb-6 shadow-xl group-hover/email:shadow-2xl group-hover/email:scale-125 group-hover/email:-rotate-12 group-hover/email:-translate-y-2 transition-all duration-500" style="transform-style: preserve-3d;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#F29F05] group-hover/email:text-white transition-colors duration-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <!-- Added inner glow effect -->
                                    <div class="absolute inset-2 rounded-2xl bg-[#F29F05]/20 opacity-0 group-hover/email:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </div>
                                <h4 class="text-xl md:text-2xl font-bold text-[#222222] mb-3 hover:text-[#F29F05] transition-colors duration-300">{{ __('frontend.email') }}</h4>
                                <a href="mailto:{{ $settings->email }}" class="text-[#213B75] hover:text-[#F29F05] transition-colors duration-300 font-medium text-lg hover:scale-105 inline-block transform-gpu">
                                    {{ $settings->email }}
                                </a>
                            </div>

                            <!-- Phone -->
                            <div class="text-center group/phone animate-scale-in perspective-500" style="animation-delay: 1.5s;">
                                <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-[#213B75]/30 to-[#F29F05]/30 backdrop-blur-md flex items-center justify-center mx-auto mb-6 shadow-xl group-hover/phone:shadow-2xl group-hover/phone:scale-125 group-hover/phone:rotate-12 group-hover/phone:-translate-y-2 transition-all duration-500" style="transform-style: preserve-3d;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#213B75] group-hover/phone:text-white transition-colors duration-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <!-- Added inner glow effect -->
                                    <div class="absolute inset-2 rounded-2xl bg-gradient-to-br from-[#213B75]/20 to-[#F29F05]/20 opacity-0 group-hover/phone:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </div>
                                <h4 class="text-xl md:text-2xl font-bold text-[#222222] mb-3 hover:text-[#213B75] transition-colors duration-300">{{ __('frontend.our_phone') }}</h4>
                                <a href="tel:{{ $settings->phone }}" class="text-[#213B75] hover:text-[#F29F05] transition-colors duration-300 font-medium text-lg hover:scale-105 inline-block transform-gpu">
                                    {{ $settings->phone }}
                                </a>
                            </div>
                        </div>

                        <!-- Ultra-enhanced social media section with 3D effects -->
                        <div class="pt-10 border-t border-gray-200/50 animate-fade-in" style="animation-delay: 1.7s;">
                            <h4 class="text-center text-2xl md:text-3xl font-bold text-[#222222] mb-8 hover:text-[#213B75] transition-colors duration-300">{{ __('frontend.follow_us') }}</h4>
                            @php
                                $socialLinks = json_decode($settings->social_links , true);
                            @endphp
                            <div class="flex justify-center gap-6">
                                <!-- Enhanced social media icons with 3D transforms and magnetic effects -->
                                <a href="{{ $socialLinks['facebook'] }}" class="group/social relative w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white shadow-xl hover:shadow-2xl hover:scale-125 hover:-rotate-12 hover:-translate-y-3 transition-all duration-500 perspective-500" style="transform-style: preserve-3d;">
                                    <i class="fab fa-facebook-f text-xl relative z-10 group-hover/social:scale-110 transition-transform duration-300"></i>
                                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover/social:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute inset-1 rounded-xl bg-blue-300/30 opacity-0 group-hover/social:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </a>
                                <a href="{{ $socialLinks['twitter'] }}" class="group/social relative w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-400 to-blue-500 flex items-center justify-center text-white shadow-xl hover:shadow-2xl hover:scale-125 hover:rotate-12 hover:-translate-y-3 transition-all duration-500 perspective-500" style="transform-style: preserve-3d;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white relative z-10 group-hover/social:scale-110 transition-transform duration-300" viewBox="0 0 512 512" fill="currentColor">
                                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                    </svg>
                                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-300 to-blue-400 opacity-0 group-hover/social:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute inset-1 rounded-xl bg-blue-200/30 opacity-0 group-hover/social:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </a>
                                <a href="{{ $socialLinks['instagram'] }}" class="group/social relative w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 via-pink-500 to-red-500 flex items-center justify-center text-white shadow-xl hover:shadow-2xl hover:scale-125 hover:-rotate-12 hover:-translate-y-3 transition-all duration-500 perspective-500" style="transform-style: preserve-3d;">
                                    <i class="fab fa-instagram text-xl relative z-10 group-hover/social:scale-110 transition-transform duration-300"></i>
                                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-purple-400 via-pink-400 to-red-400 opacity-0 group-hover/social:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute inset-1 rounded-xl bg-pink-300/30 opacity-0 group-hover/social:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </a>
                                <a href="{{ $socialLinks['linkedin'] }}" class="group/social relative w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-700 flex items-center justify-center text-white shadow-xl hover:shadow-2xl hover:scale-125 hover:rotate-12 hover:-translate-y-3 transition-all duration-500 perspective-500" style="transform-style: preserve-3d;">
                                    <i class="fab fa-linkedin-in text-xl relative z-10 group-hover/social:scale-110 transition-transform duration-300"></i>
                                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 opacity-0 group-hover/social:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute inset-1 rounded-xl bg-blue-400/30 opacity-0 group-hover/social:opacity-100 animate-pulse transition-opacity duration-500"></div>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Added floating decorative elements throughout the contact section -->
                        <div class="absolute top-6 right-6 w-12 h-12 bg-gradient-to-br from-[#213B75]/10 to-[#F29F05]/10 rounded-full blur-lg animate-float opacity-50"></div>
                        <div class="absolute bottom-6 left-6 w-8 h-8 bg-gradient-to-br from-[#F29F05]/10 to-[#213B75]/10 rounded-full blur-md animate-float opacity-40" style="animation-delay: 1.5s;"></div>
                        <div class="absolute top-1/2 left-8 w-4 h-4 bg-[#213B75]/20 rounded-full animate-float opacity-60" style="animation-delay: 3s;"></div>
                        <div class="absolute top-1/3 right-12 w-6 h-6 bg-[#F29F05]/15 rounded-full animate-float opacity-50" style="animation-delay: 2s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-frontend.layouts.main>
