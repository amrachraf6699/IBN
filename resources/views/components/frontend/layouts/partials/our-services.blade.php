    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    {{ __('frontend.what_we_do') }}
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">{{ __('frontend.our') }} <span class="text-primary">{{ __('frontend.our_services') }}</span></h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-[]">
                @foreach($services as $service)
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <img src="{{ $service->icon_path }}" alt="{{ $service->title }}" class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center">
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">{{ $service->title }}</h3>
                        <p class="text-gray-600 mb-6">
                            {{ $service->description }}
                        </p>
                        <a href="{{ route('service.show' , $service) }}" class="inline-flex items-center font-semibold text-primary hover:text-dark transition-colors duration-300">
                            {{ __('frontend.learn_more') }}
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
        </div>
        @if(request()->routeIs('services'))
        @else
        <div class="text-center mt-12 scroll-trigger">
            <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
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
    </section>