@php
$settings = settings();
@endphp
<x-frontend.layouts.main :title="__('frontend.about_us')">
<section class="py-3 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="text-center mb-6 mt-6 scroll-trigger">
            <span class="inline-block text-2xl text-primary font-semibold mb-2 relative">
                {{ __('frontend.about_us') }}
            </span>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-8 mb-16">
            <!-- Who We Are Section -->
            <div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mr-4 ml-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-dark">{{ __('frontend.who_we_are') }}</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <p class="text-gray-700 leading-relaxed text-lg">
                                {{ __('frontend.about_description_1') }}
                            </p>
                            <p class="text-gray-700 leading-relaxed text-lg">
                                {{ __('frontend.about_description_2') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Vision Section -->
            <div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger h-full">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mr-4 ml-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-dark">{{ __('frontend.our_vision') }}</h3>
                        </div>
                        
                        <div class="flex items-start">
                            <span class="text-green-500 text-xl mr-2 flex-shrink-0">✅</span>
                            <p class="text-gray-700 leading-relaxed">
                                {{ __('frontend.vision_text') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mission Section -->
            <div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger h-full">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mr-4 ml-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-dark">{{ __('frontend.our_mission') }}</h3>
                        </div>
                        
                        <div class="flex items-start">
                            <span class="text-green-500 text-xl mr-2 flex-shrink-0">✅</span>
                            <p class="text-gray-700 leading-relaxed">
                                {{ __('frontend.mission_text') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger h-full">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <!-- Address + Email + Phone Section -->
                        <div class="flex flex-col md:flex-row md:space-x-8 space-y-6 md:space-y-0 text-sm justify-center items-center text-center">
                            <!-- Address -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-dark mb-1">{{ __('frontend.address') }}</h4>
                                    <p class="text-gray-600">{{ $settings->address }}</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-dark mb-1">{{ __('frontend.email') }}</h4>
                                    <a href="mailto:{{ $settings->email }}" class="text-primary hover:text-dark transition-colors duration-300">
                                        {{ $settings->email }}
                                    </a>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-dark mb-1">{{ __('frontend.our_phone') }}</h4>
                                    <a href="tel:{{ $settings->phone }}" class="text-primary hover:text-dark transition-colors duration-300">
                                        {{ $settings->phone }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        
                        <!-- Social Media Links (Optional) -->
                        <div class="mt-4 pt-6 border-t border-gray-200 flex justify-center">
                            @php
                                $socialLinks = json_decode($settings->social_links , true);
                            @endphp
                            <div class="flex rtl:space-x-reverse space-x-4">
                                <a href="{{ $socialLinks['facebook'] }}" class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{ $socialLinks['twitter'] }}" class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg"  class="w-4 h-4 text-white" viewBox="0 0 512 512" fill="currentColor"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                </a>
                                <a href="{{ $socialLinks['instagram'] }}" class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white hover:from-purple-600 hover:to-pink-600 transition-colors">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="{{ $socialLinks['linkedin'] }}" class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center text-white hover:bg-blue-800 transition-colors">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-frontend.layouts.main>