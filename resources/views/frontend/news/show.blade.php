<x-frontend.layouts.main :title="__('frontend.news')">
    <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Service Detail Card -->
        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
            <!-- Service Header -->
            <div class="h-2 bg-primary"></div>
            
            <div class="p-8">
                <div class="flex flex-col md:flex-row gap-8">
                    <!-- Service Image Column -->
                    <div class="md:w-1/3 flex flex-col items-center">
                        <div class="rounded-xl overflow-hidden mb-6 w-full">
                            <img src="{{ $news->thumbnail }}" alt="{{ $news->title }}" class="w-full h-auto object-cover">
                        </div>
                    </div>
                    
                    <!-- Service Content Column -->
                    <div class="md:w-2/3">
                        <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">{{ $news->title }}</h1>
                        <div class="h-1 w-20 bg-primary mb-6"></div>
                        
                        <!-- Service Description -->
                        <div class="text-gray-600 mb-8 text-lg">
                            {{ $news->description }}
                        </div>
                        
                        <!-- Service Content -->
                        <div class="prose max-w-none">
                            {!! $news->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-frontend.layouts.main>