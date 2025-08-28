@if($partners->count() > 0)
    <section id="partners" class="py-20 relative overflow-hidden">
        <!-- Enhanced background with floating animated elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-white"></div>
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-72 h-72 bg-gradient-to-r from-[#213B75] to-[#F29F05] rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-gradient-to-l from-[#F29F05] to-[#213B75] rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 w-48 h-48 bg-gradient-to-r from-[#213B75]/30 to-[#F29F05]/30 rounded-full blur-2xl animate-float" style="animation-delay: 2s;"></div>
        </div>
        
        <!-- Added floating particles for extra modern effect -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-[#213B75] rounded-full animate-float opacity-20" style="animation-delay: 0.5s;"></div>
            <div class="absolute top-3/4 right-1/4 w-3 h-3 bg-[#F29F05] rounded-full animate-float opacity-30" style="animation-delay: 1.5s;"></div>
            <div class="absolute top-1/2 right-1/3 w-1 h-1 bg-[#213B75] rounded-full animate-float opacity-40" style="animation-delay: 2.5s;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <!-- Enhanced header with slide-up animation -->
            <div class="text-center mb-16 scroll-trigger animate-slide-up">
                <span class="inline-block text-[#213B75] font-semibold mb-2 relative px-6 py-2 bg-white/80 backdrop-blur-sm rounded-full border border-[#213B75]/20 animate-scale-in" style="animation-delay: 0.2s;">
                    {{ __('frontend.our_partners') }}
                    <span class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 h-1 w-8 bg-gradient-to-r from-[#213B75] to-[#F29F05] rounded-full animate-slide-right" style="animation-delay: 0.5s;"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-[#222222] mt-4 animate-fade-in" style="animation-delay: 0.3s;">{{ __('frontend.trusted_by') }} <span
                        class="text-transparent bg-gradient-to-r from-[#213B75] to-[#F29F05] bg-clip-text">{{ __('frontend.our_partners') }}</span></h2>
            </div>

            <!-- Enhanced partners grid with staggered entrance animations -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8">
                @foreach ($partners as $index => $partner)
                    <div class="relative">
                        <!-- Added floating logo card that appears above on hover -->
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 z-20 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0 pointer-events-none">
                            <div class="bg-white/90 backdrop-blur-md rounded-2xl p-4 shadow-xl border border-white/30 animate-float">
                                <img src="{{ $partner->thumbnail }}" alt="Partner Logo" class="max-h-8 w-auto object-contain mx-auto">
                            </div>
                        </div>
                        
                        <a href="{{ $partner->url }}" target="_blank" rel="noopener noreferrer"
                            class="relative flex items-center justify-center p-8 bg-white/60 backdrop-blur-sm rounded-3xl border border-white/20 shadow-lg hover:shadow-2xl scroll-trigger group transition-all duration-700 hover:scale-110 hover:-translate-y-3 animate-scale-in block"
                            style="animation-delay: {{ ($index * 0.1) + 0.5 }}s;">
                            
                            <!-- Enhanced gradient border with floating animation -->
                            <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-[#213B75]/20 to-[#F29F05]/20 opacity-0 group-hover:opacity-100 transition-all duration-700 animate-float"></div>
                            
                            <!-- Logo that fades out on hover -->
                            <div class="relative z-10 transition-all duration-500 group-hover:opacity-0 group-hover:scale-75">
                                <img src="{{ $partner->thumbnail }}" alt="Partner Logo" class="max-h-12 w-auto object-contain filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            </div>
                            
                            <!-- Content that appears in main card on hover -->
                            <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 p-4 text-center transform scale-95 group-hover:scale-100">
                                <div class="relative z-10">
                                    <h3 class="font-bold text-[#213B75] mb-2 text-lg animate-slide-up">{{ $partner->title }}</h3>
                                    <p class="text-sm text-[#222222]/70 leading-relaxed animate-fade-in" style="animation-delay: 0.1s;">{{ $partner->description }}</p>
                                </div>
                            </div>
                            
                            <!-- Enhanced glow effect with pulsing animation -->
                            <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-[#213B75] to-[#F29F05] opacity-0 group-hover:opacity-30 blur-xl transition-all duration-700 -z-10 animate-pulse"></div>
                            
                            <!-- Added floating ring effect on hover -->
                            <div class="absolute inset-0 rounded-3xl border-2 border-gradient-to-r from-[#213B75] to-[#F29F05] opacity-0 group-hover:opacity-50 transition-all duration-700 animate-float scale-110"></div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
