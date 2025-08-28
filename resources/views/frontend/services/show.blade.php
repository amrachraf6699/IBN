<x-frontend.layouts.main :title="__('frontend.services')">
    <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb Navigation -->
        <div class="mb-8">
            <a href="{{ route('services') }}" class="inline-flex items-center text-primary hover:text-dark transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                {{ __('frontend.back_to_services') }}
            </a>
        </div>

        <!-- Service Detail Card -->
        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
            <!-- Service Header -->
            <div class="h-2 bg-primary"></div>
            
            <div class="p-8">
                <div class="flex flex-col md:flex-row gap-8">
                    <!-- Service Image Column -->
                    <div class="md:w-1/3 flex flex-col items-center">
                        <div class="rounded-xl overflow-hidden mb-6 w-full">
                            <img src="{{ $service->thumbnail }}" alt="{{ $service->title }}" class="w-full h-auto object-cover">
                        </div>
                    </div>
                    
                    <!-- Service Content Column -->
                    <div class="md:w-2/3">
                        <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">{{ $service->title }}</h1>
                        <div class="h-1 w-20 bg-primary mb-6"></div>
                        
                        <!-- Service Description -->
                        <div class="text-gray-600 mb-8 text-lg">
                            {{ $service->description }}
                        </div>
                        
                        <!-- Service Content -->
                        <div class="prose max-w-none">
                            {!! $service->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-frontend.layouts.main>