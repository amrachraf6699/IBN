@php
$settings = settings();
@endphp
<x-frontend.layouts.main :title="$service->title">
    <!-- Added comprehensive meta tags for social media sharing -->
    <x-slot name="meta">
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="{{ $service->title }}" />
        <meta property="og:description" content="{{ Str::limit(strip_tags($service->description), 160) }}" />
        <meta property="og:image" content="{{ $service->thumbnail }}" />
        <meta property="og:url" content="{{ request()->url() }}" />
        <meta property="og:type" content="article" />
        <meta property="og:site_name" content="{{ config('app.name') }}" />
        
        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{ $service->title }}" />
        <meta name="twitter:description" content="{{ Str::limit(strip_tags($service->description), 160) }}" />
        <meta name="twitter:image" content="{{ $service->thumbnail }}" />
        
        <!-- Additional Meta Tags -->
        <meta name="description" content="{{ Str::limit(strip_tags($service->description), 160) }}" />
        <link rel="canonical" href="{{ request()->url() }}" />
    </x-slot>

    <!-- Added floating background elements and modern styling -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-[#213B75]/10 to-[#F29F05]/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-[#F29F05]/10 to-[#213B75]/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-[#213B75]/5 to-[#F29F05]/5 rounded-full blur-2xl animate-float" style="animation-delay: 4s;"></div>
    </div>

    <section class="relative py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 min-h-screen">
        <div class="container mx-auto px-4 relative z-10">
            <!-- Modernized breadcrumb with glass morphism -->
            <div class="mb-12 scroll-trigger animate-slide-up">
                <a href="{{ route('services') }}" class="group inline-flex items-center bg-white/80 backdrop-blur-sm border border-[#213B75]/20 rounded-full px-6 py-3 text-[#213B75] hover:bg-[#213B75] hover:text-white transition-all duration-500 hover:scale-105 hover:shadow-lg hover:shadow-[#213B75]/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 transform group-hover:-translate-x-1 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-semibold">{{ __('frontend.back_to_services') }}</span>
                </a>
            </div>

            <!-- Completely modernized service detail card with glass morphism and animations -->
            <div class="bg-white/70 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl border border-white/20 scroll-trigger animate-scale-in" style="animation-delay: 0.2s;">
                <!-- Modern gradient header -->
                <div class="h-2 bg-gradient-to-r from-[#213B75] via-[#F29F05] to-[#213B75] animate-pulse"></div>
                
                <div class="p-8 md:p-12">
                    <div class="flex flex-col lg:flex-row gap-12">
                        <!-- Enhanced service image column with 3D effects -->
                        <div class="lg:w-2/5 scroll-trigger animate-slide-right" style="animation-delay: 0.4s;">
                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-br from-[#213B75]/20 to-[#F29F05]/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-500 transform group-hover:scale-110"></div>
                                <div class="relative rounded-2xl overflow-hidden transform group-hover:scale-105 transition-all duration-500 hover:shadow-2xl hover:shadow-[#213B75]/20">
                                    <img src="{{ $service->thumbnail }}" alt="{{ $service->title }}" class="w-full h-auto object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#213B75]/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                </div>
                            </div>
                            
                            <div class="flex flex-row gap-4 mt-8 animate-slide-up" style="animation-delay: 1.6s;">
    <!-- WhatsApp CTA Button -->
    <a href="https://wa.me/{{ $settings->phone }}?text={{ urlencode('Hi, I am interested in your service: ' . $service->title) }}" 
       target="_blank"
       class="group inline-flex items-center justify-center bg-gradient-to-r from-[#25D366] to-[#128C7E] text-white font-bold py-4 px-6 rounded-2xl hover:shadow-2xl hover:shadow-[#25D366]/30 transform hover:scale-105 transition-all duration-500 hover:-translate-y-1">
        <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
        </svg>
        <span class="mr-2 ml-2">{{ __('frontend.contact_whatsapp') }}</span>
    </a>

    <!-- Share Buttons -->
    <div class="flex flex-row gap-3">
        <!-- Facebook Share -->
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="flex items-center justify-center p-3 rounded-xl hover:bg-[#1877F2]/20 text-[#1877F2] hover:scale-105 transition-all duration-300">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
        </a>
        
        <!-- Twitter Share -->
        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($service->title) }}" target="_blank" class="flex items-center justify-center p-3 rounded-xl hover:bg-[#1DA1F2]/20 text-[#1DA1F2] hover:scale-105 transition-all duration-300">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
            </svg>
        </a>
        
        <!-- LinkedIn Share -->
        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" target="_blank" class="flex items-center justify-center p-3 rounded-xl hover:bg-[#0077B5]/20 text-[#0077B5] hover:scale-105 transition-all duration-300">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
        </a>
        
        <!-- WhatsApp Share -->
        <a href="https://wa.me/?text={{ urlencode($service->title . ' | ' . request()->url()) }}" target="_blank" class="flex items-center justify-center p-3 rounded-xl hover:bg-[#25D366]/20 text-[#25D366] hover:scale-105 transition-all duration-300">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
            </svg>
        </a>
    </div>
</div>
                        </div>
                        
                        <!-- Enhanced service content column with modern typography and animations -->
                        <div class="lg:w-3/5 scroll-trigger animate-slide-left" style="animation-delay: 0.6s;">
                            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-[#222222] mb-6 leading-tight">
                                <span class="text-transparent bg-gradient-to-r from-[#213B75] to-[#F29F05] bg-clip-text animate-fade-in" style="animation-delay: 0.8s;">{{ $service->title }}</span>
                            </h1>
                            
                            <!-- Modern animated underline -->
                            <div class="relative mb-8">
                                <div class="h-1 w-24 bg-gradient-to-r from-[#213B75] to-[#F29F05] rounded-full animate-slide-right" style="animation-delay: 1s;"></div>
                                <div class="absolute top-0 left-0 h-1 w-12 bg-white rounded-full animate-slide-right" style="animation-delay: 1.2s;"></div>
                            </div>
                            
                            <!-- Enhanced service description with modern styling -->
                            <div class="text-gray-600 mb-10 text-lg md:text-xl leading-relaxed font-medium animate-fade-in" style="animation-delay: 1.4s;">
                                {{ $service->description }}
                            </div>
                            
                            <!-- Enhanced service content with modern prose styling -->
                            <div class="prose prose-lg max-w-none prose-headings:text-[#222222] prose-headings:font-bold prose-p:text-gray-600 prose-p:leading-relaxed prose-a:text-[#213B75] prose-a:no-underline hover:prose-a:text-[#F29F05] prose-strong:text-[#213B75] animate-fade-in" style="animation-delay: 1.8s;">
                                {!! $service->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Added JavaScript for share functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const shareBtn = document.querySelector('.share-btn');
            const shareDropdown = document.querySelector('.share-dropdown');
            
            shareBtn.addEventListener('click', function(e) {
                e.preventDefault();
                shareDropdown.classList.toggle('opacity-0');
                shareDropdown.classList.toggle('invisible');
                shareDropdown.classList.toggle('scale-95');
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!shareBtn.contains(e.target) && !shareDropdown.contains(e.target)) {
                    shareDropdown.classList.add('opacity-0', 'invisible', 'scale-95');
                }
            });
        });
    </script>
</x-frontend.layouts.main>
