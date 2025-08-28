    <section id="news" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    {{ __('frontend.latest_news') }}
                    {{-- <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span> --}}
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">{{ __('frontend.news') }} & <span class="text-primary">{{ __('frontend.insights') }}</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    {{ __('frontend.news_and_insights') }}
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($news as $item)
                <div class="news-card bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="relative">
                        <img src="{{ $item->thumbnail }}" alt="News" class="w-full h-48 object-cover">
                        <div class="news-overlay absolute inset-0 bg-gradient-to-t from-dark/90 to-primary/50 flex items-center justify-center">
                            <a href="{{ route('news.show' , $item) }}" class="px-6 py-3 bg-white text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300">
                                {{ __('frontend.read_more') }}
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $item->created_at->format('F j, Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-2">{{ $item->title }}</h3>
                        <p class="text-gray-600 mb-4">
                            {{ Str::limit($item->description, 100) }}
                        </p>
                        <a href="{{ route('news.show' , $item) }}" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            {{ __('frontend.read_more') }}
                            @if(app()->getLocale() == 'en')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.707 5.293a1 1 0 010 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            @endif
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            
            @if(request()->routeIs('news'))
            @else
            <div class="text-center mt-12 scroll-trigger">
                <a href="{{ route('news') }}" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    {{ __('frontend.view_all') }}
                    @if(app()->getLocale() == 'en')
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.707 5.293a1 1 0 010 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    @endif
                </a>
            </div>
            @endif
        </div>
    </section>
    