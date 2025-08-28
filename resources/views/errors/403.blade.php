<x-frontend.layouts.main>
    <div class="min-h-screen flex flex-col">
        <!-- Error Page Content -->
        <main class="flex-grow flex items-center justify-center px-4 py-12">
            <div class="max-w-3xl w-full">
                <!-- Error Illustration and Message -->
                <div class="text-center">
                    <!-- Error Illustration -->
                    <div class="relative mx-auto w-64 h-64 mb-8">
                        <div class="absolute top-0 left-0 w-full h-full bg-primary/10 rounded-full animate-pulse"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-9xl font-bold text-primary opacity-20">403</span>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-lock text-5xl text-primary"></i>
                        </div>
                    </div>
                    
                    <!-- Error Message -->
                    <h1 class="text-4xl font-bold text-dark mb-4">{{ __('frontend.access_forbidden') }}</h1>
                    <p class="text-xl text-gray-600 mb-8">{{ __('frontend.access_forbidden_message') }}</p>
                    
                    <!-- Navigation Options -->
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('home') }}" class="px-6 py-3 bg-primary hover:bg-red-800 text-white font-medium rounded-lg transition-colors flex items-center justify-center">
                            <i class="fas fa-home {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            {{ __('frontend.back_to_home') }}
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-frontend.layouts.main>
