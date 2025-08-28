<section id="news" class="py-20 relative overflow-hidden">
    <!-- Added modern gradient background with floating elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-gray-100"></div>
    
    <!-- Floating background elements -->
    <div class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-full blur-xl animate-float"></div>
    <div class="absolute top-1/2 right-20 w-24 h-24 bg-gradient-to-br from-secondary/10 to-primary/10 rounded-full blur-xl animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute bottom-20 left-1/3 w-20 h-20 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-full blur-xl animate-float" style="animation-delay: 4s;"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Updated header to match modern partners section style -->
        <div class="text-center mb-16 scroll-trigger animate-slide-up">
            <span class="inline-block text-[#213B75] font-semibold mb-2 relative px-6 py-2 bg-white/80 backdrop-blur-sm rounded-full border border-[#213B75]/20 animate-scale-in" style="animation-delay: 0.2s;">
                {{ __('frontend.latest_news') }}
                <span class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 h-1 w-8 bg-gradient-to-r from-[#213B75] to-[#F29F05] rounded-full animate-slide-right" style="animation-delay: 0.5s;"></span>
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-[#222222] mt-4 animate-fade-in" style="animation-delay: 0.3s;">{{ __('frontend.news') }} & <span
                    class="text-transparent bg-gradient-to-r from-[#213B75] to-[#F29F05] bg-clip-text">{{ __('frontend.insights') }}</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4 animate-slide-up" style="animation-delay: 0.4s;">
                {{ __('frontend.news_and_insights') }}
            </p>
        </div>
        
        <!-- Modernized news cards grid with staggered animations -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($news as $index => $item)
            <div class="news-card group relative scroll-trigger animate-slide-up" style="animation-delay: {{ $index * 0.2 }}s;">
                <!-- Modern glass morphism card design -->
                <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 transition-all duration-500 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 hover:scale-[1.02]">
                    
                    <!-- Enhanced image section with modern overlay -->
                    <div class="relative overflow-hidden">
                        <img src="{{ $item->thumbnail }}" alt="News" class="w-full h-48 object-cover transition-transform duration-700 group-hover:scale-110">
                        
                        <!-- Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        
                        <!-- Modern floating read more button -->
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                            <a href="{{ route('news.show' , $item) }}" class="px-6 py-3 bg-white/90 backdrop-blur-sm text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300 transform hover:scale-105 shadow-lg">
                                {{ __('frontend.read_more') }}
                            </a>
                        </div>
                        
                        <!-- Modern category badge -->
                        <div class="absolute top-4 left-4 px-3 py-1 bg-primary/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full">
                            News
                        </div>
                    </div>
                    
                    <!-- Enhanced content section -->
                    <div class="p-6 relative">
                        <!-- Modern date display -->
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-primary/10 to-secondary/10 flex items-center justify-center mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span>{{ $item->created_at->format('F j, Y') }}</span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-dark mb-2 group-hover:text-primary transition-colors duration-300">{{ $item->title }}</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            {{ Str::limit($item->description, 100) }}
                        </p>
                        
                        <!-- Modern read more link with enhanced styling -->
                        <a href="{{ route('news.show' , $item) }}" class="inline-flex items-center font-semibold text-primary hover:text-secondary transition-all duration-300 group/link">
                            {{ __('frontend.read_more') }}
                            @if(app()->getLocale() == 'en')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-300 group-hover/link:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 transition-transform duration-300 group-hover/link:-translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.707 5.293a1 1 0 010 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            @endif
                        </a>
                        
                        <!-- Added subtle glow effect on hover -->
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Enhanced view all button with modern styling -->
        @if(request()->routeIs('news'))
        @else
        <div class="text-center mt-12 scroll-trigger animate-fade-in" style="animation-delay: 1s;">
            <a href="{{ route('news') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary to-secondary text-white rounded-full hover:shadow-2xl hover:shadow-primary/25 transition-all duration-500 transform hover:-translate-y-1 hover:scale-105 group">
                <span class="font-semibold">{{ __('frontend.view_all') }}</span>
                @if(app()->getLocale() == 'en')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 transition-transform duration-300 group-hover:-translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.707 5.293a1 1 0 010 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                @endif
            </a>
        </div>
        @endif
    </div>
</section>
