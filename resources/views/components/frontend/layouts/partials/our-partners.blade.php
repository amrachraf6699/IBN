@if($partners->count() > 0)
    <section id="partners" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-trigger">
                <span class="inline-block text-primary font-semibold mb-2 relative">
                    {{ __('frontend.our_partners') }}
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-0.5 w-10 bg-primary"></span>
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-dark">{{ __('frontend.trusted_by') }} <span
                        class="text-primary">{{ __('frontend.our_partners') }}</span></h2>
            </div>

            <!-- Partners grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8">
                @foreach ($partners as $partner)
                    <a href="{{ $partner->url }}" target="_blank" rel="noopener noreferrer"
                        class="flex items-center justify-center p-8 bg-gray-50 rounded-lg hover-lift scroll-trigger">
                        <img src="{{ $partner->thumbnail }}" alt="Partner Logo" class="max-h-12 rounded-full">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif