<section id="team" class="py-20 relative overflow-hidden">
    <!-- Added floating background elements and modern gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-gray-100"></div>
    
    <!-- Floating background elements -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-[#213B75]/10 to-[#F29F05]/10 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-10 w-40 h-40 bg-gradient-to-br from-[#F29F05]/10 to-[#213B75]/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-gradient-to-br from-[#213B75]/5 to-[#F29F05]/5 rounded-full blur-2xl animate-float" style="animation-delay: 4s;"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Updated header to match modern style with badge and gradient text -->
        <div class="text-center mb-16 scroll-trigger animate-slide-up">
            <span class="inline-block text-[#213B75] font-semibold mb-2 relative px-6 py-2 bg-white/80 backdrop-blur-sm rounded-full border border-[#213B75]/20 animate-scale-in" style="animation-delay: 0.2s;">
                {{ __('frontend.our_experts') }}
                <span class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 h-1 w-8 bg-gradient-to-r from-[#213B75] to-[#F29F05] rounded-full animate-slide-right" style="animation-delay: 0.5s;"></span>
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-[#222222] mt-4 animate-fade-in" style="animation-delay: 0.3s;">
                {{ __('frontend.meet') }} 
                <span class="text-transparent bg-gradient-to-r from-[#213B75] to-[#F29F05] bg-clip-text">{{ __('frontend.team') }}</span>
            </h2>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($team as $index => $member)
            <!-- Enhanced team cards with glass morphism, 3D transforms, and staggered animations -->
            <div class="team-card scroll-trigger animate-slide-up group" style="animation-delay: {{ 0.1 * $index }}s;">
                <div class="relative bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-xl border border-white/20 transition-all duration-700 hover:scale-105 hover:rotate-1 hover:shadow-2xl hover:shadow-[#213B75]/20 transform-gpu">
                    <!-- Gradient border effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-[#213B75]/20 via-transparent to-[#F29F05]/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <div class="relative">
                        <!-- Enhanced image with better hover effects and floating overlay -->
                        <div class="relative overflow-hidden rounded-t-3xl">
                            <img src="{{ $member->thumbnail }}" alt="Team Member" class="w-full h-80 object-cover object-center transition-all duration-700 group-hover:scale-110 group-hover:rotate-2">
                            
                            <!-- Enhanced overlay with floating social icons -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#222222]/90 via-[#222222]/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end justify-center p-6">
                                <div class="flex items-center justify-center rtl:space-x-reverse space-x-4 transform translate-y-8 group-hover:translate-y-0 transition-all duration-700">
                                    @if($member->facebook)
                                    <a href="{{ $member->facebook }}" target="_blank" class="w-12 h-12 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#213B75] hover:bg-[#213B75] hover:text-white transition-all duration-300 transform hover:scale-110 hover:-translate-y-2 shadow-lg hover:shadow-xl animate-scale-in" style="animation-delay: {{ 0.5 + 0.1 * $index }}s;">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                                        </svg>
                                    </a>
                                    @endif
                                    @if($member->linkedin)
                                    <a href="{{ $member->linkedin }}" target="_blank" class="w-12 h-12 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#213B75] hover:bg-[#213B75] hover:text-white transition-all duration-300 transform hover:scale-110 hover:-translate-y-2 shadow-lg hover:shadow-xl animate-scale-in" style="animation-delay: {{ 0.6 + 0.1 * $index }}s;">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                                        </svg>
                                    </a>
                                    @endif
                                    @if($member->instagram)
                                    <a href="{{ $member->instagram }}" target="_blank" class="w-12 h-12 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#213B75] hover:bg-[#F29F05] hover:text-white transition-all duration-300 transform hover:scale-110 hover:-translate-y-2 shadow-lg hover:shadow-xl animate-scale-in" style="animation-delay: {{ 0.7 + 0.1 * $index }}s;">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Floating glow effect -->
                            <div class="absolute -inset-1 bg-gradient-to-r from-[#213B75]/20 to-[#F29F05]/20 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-all duration-500 -z-10"></div>
                        </div>
                        
                        <!-- Enhanced content section with better typography and animations -->
                        <div class="p-6 relative">
                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-1 bg-gradient-to-r from-[#213B75] to-[#F29F05] rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                            
                            <h3 class="text-xl font-bold text-[#222222] mb-2 group-hover:text-[#213B75] transition-all duration-300">{{ $member->name }}</h3>
                            <p class="text-[#F29F05] font-semibold mb-3 text-sm uppercase tracking-wider">{{ $member->job_title }}</p>
                            <p class="text-gray-600 text-sm leading-relaxed group-hover:text-gray-700 transition-all duration-300">
                                {{ $member->description }}
                            </p>
                            
                            <!-- Animated underline -->
                            <div class="absolute bottom-0 left-6 right-6 h-px bg-gradient-to-r from-transparent via-[#213B75]/30 to-transparent transform scale-x-0 group-hover:scale-x-100 transition-all duration-500"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        @if(request()->routeIs('our_team'))
        @else
        <!-- Enhanced view all button with modern styling and animations -->
        <div class="text-center mt-16 scroll-trigger animate-fade-in" style="animation-delay: 0.8s;">
            <a href="{{ route('our_team') }}" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#213B75] to-[#213B75]/90 text-white rounded-full hover:from-[#213B75]/90 hover:to-[#F29F05] transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-[#213B75]/30 relative overflow-hidden">
                <span class="absolute inset-0 bg-gradient-to-r from-[#F29F05] to-[#213B75] opacity-0 group-hover:opacity-100 transition-all duration-500"></span>
                <span class="relative z-10 font-semibold">{{ __('frontend.view_all') }}</span>
                @if(app()->getLocale() == 'en')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-all duration-300 relative z-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 transform group-hover:-translate-x-1 transition-all duration-300 relative z-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.707 5.293a1 1 0 010 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                @endif
            </a>
        </div>
        @endif
    </div>
</section>
