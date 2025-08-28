<section id="services" class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20 scroll-trigger">
            <span class="inline-block text-primary font-semibold mb-3 text-lg tracking-wide relative">
                {{ __('frontend.what_we_do') }}
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-1 w-12 bg-secondary rounded-full"></span>
            </span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-dark leading-tight">
                {{ __('frontend.our') }} <span class="text-primary">{{ __('frontend.our_services') }}</span>
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($services as $index => $service)
            <div class="relative bg-white rounded-3xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 scroll-trigger {{ $index % 2 == 0 ? 'border-t-4 border-primary' : 'border-t-4 border-secondary' }}">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-2xl {{ $index % 2 == 0 ? 'bg-primary/10' : 'bg-secondary/10' }} flex items-center justify-center mb-6">
                        <img src="{{ $service->icon_path }}" alt="{{ $service->title }}" class="w-12 h-12 object-contain">
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-4">{{ $service->title }}</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ Str::limit($service->description, 40) }}
                    </p>
                    <a href="{{ route('service.show', $service) }}" class="inline-flex items-center font-semibold {{ $index % 2 == 0 ? 'text-primary hover:text-dark' : 'text-secondary hover:text-dark' }} transition-colors duration-300">
                        {{ __('frontend.learn_more') }}
                        @if(app()->getLocale() == 'en')
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.707 5.293a1 1 0 010 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        @endif
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        @if(!request()->routeIs('services'))
        <div class="text-center mt-16 scroll-trigger">
            <a href="{{ route('services') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary to-secondary text-white rounded-full hover:from-primary/90 hover:to-secondary/90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl text-lg font-semibold">
                {{ __('frontend.view_all') }}
                @if(app()->getLocale() == 'en')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.707 5.293a1 1 0 010 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                @endif
            </a>
        </div>
        @endif
    </section>