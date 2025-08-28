    <section id="about" class="py-20 mt-4">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    {{ __('frontend.who_we_are') }}
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">{{ __('frontend.about') }} <span class="text-primary">{{ $settings->name }}</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    {{ __('frontend.about_description') }}
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
<div class="relative max-w-xs md:max-w-sm lg:max-w-md mx-auto">
  <div class="bg-primary/10 absolute -top-6 -left-6 w-full h-full rounded-lg"></div>
  <div class="relative rounded-lg overflow-hidden">
    <img src="{{ asset('stats.jpg') }}" alt="About IBN"
         class="w-full h-auto rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-primary/40 to-dark/40 opacity-0 hover:opacity-100 transition-all duration-500"></div>
  </div>
</div>

                
                <div class="scroll-trigger">
                    <h3 class="text-2xl font-bold text-dark mb-4 relative">
                        {{ __('frontend.who_we_are_header') }}
                        <span class="absolute -bottom-2 left-0 h-1 w-16 bg-primary"></span>
                    </h3>
                    <p class="text-gray-600 mb-6">
                        {{ __('frontend.who_we_are_1') }}
                    </p>
                    <p class="text-gray-600 mb-8">
                        {{ __('frontend.who_we_are_2') }}
                    </p>
                    <!-- Stats -->
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        @foreach ($statistics as $statistic)
                            <div class="text-center p-4 bg-gray-50 rounded-lg hover-lift">
                                <div class="text-primary text-4xl font-bold mb-1 count-up" data-target="{{ $statistic->value }}" data-duration="1000">0</div>
                                <p class="text-gray-600 text-sm">{{ $statistic->name }}</p>
                            </div>
                        @endforeach
                    </div>                
                </div>
            </div>
        </div>
    </section>