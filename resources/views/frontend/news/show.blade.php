<x-frontend.layouts.main :title="$news->title">
    <!-- Added meta tags for social sharing -->
    <x-slot name="meta">
        <meta property="og:title" content="{{ $news->title }}">
        <meta property="og:description" content="{{ Str::limit(strip_tags($news->description), 160) }}">
        <meta property="og:image" content="{{ $news->thumbnail }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="article">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $news->title }}">
        <meta name="twitter:description" content="{{ Str::limit(strip_tags($news->description), 160) }}">
        <meta name="twitter:image" content="{{ $news->thumbnail }}">
    </x-slot>

    <!-- Modernized with glass morphism and floating background elements -->
    <section class="py-20 relative overflow-hidden">
        <!-- Floating Background Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-[#213B75]/10 to-[#F29F05]/10 rounded-full blur-xl animate-float"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-gradient-to-br from-[#F29F05]/10 to-[#213B75]/10 rounded-full blur-xl animate-float" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-40 h-40 bg-gradient-to-br from-[#213B75]/5 to-[#F29F05]/5 rounded-full blur-2xl animate-float" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Modern glass morphism card with enhanced styling -->
            <div class="bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl border border-white/20 scroll-trigger animate-slide-up">
                <!-- Enhanced Header with Gradient -->
                <div class="h-3 bg-gradient-to-r from-[#213B75] via-[#F29F05] to-[#213B75] animate-slide-right"></div>
                
                <div class="p-8 md:p-12">
                    <div class="flex flex-col lg:flex-row gap-12">
                        <!-- Image Column with Share Icons -->
                        <div class="lg:w-2/5 flex flex-col items-center scroll-trigger animate-slide-right">
                            <!-- Enhanced Image Container -->
                            <div class="relative rounded-3xl overflow-hidden mb-8 w-full group">
                                <div class="absolute inset-0 bg-gradient-to-br from-[#213B75]/20 to-[#F29F05]/20 opacity-0 group-hover:opacity-100 transition-all duration-500 z-10"></div>
                                <img src="{{ $news->thumbnail }}" alt="{{ $news->title }}" 
                                     class="w-full h-auto object-cover transform group-hover:scale-105 transition-all duration-700">
                                <div class="absolute inset-0 ring-1 ring-white/20 rounded-3xl"></div>
                            </div>
                            
                            <!-- Direct Social Share Icons under image -->
                            <div class="w-full">
                                <h3 class="text-lg font-semibold text-[#222222] mb-4 text-center animate-fade-in" style="animation-delay: 0.3s;">{{ __('frontend.share') }}</h3>
                                <div class="flex justify-center gap-4 animate-slide-up" style="animation-delay: 0.4s;">
                                    <!-- Facebook Share -->
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                                       target="_blank" rel="noopener"
                                       class="group relative w-14 h-14 bg-gradient-to-br from-[#1877F2] to-[#1877F2]/80 rounded-2xl flex items-center justify-center text-white shadow-lg hover:shadow-xl transform hover:scale-110 hover:-translate-y-1 transition-all duration-300">
                                        <svg class="w-6 h-6 transform group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                        <div class="absolute inset-0 bg-white/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    </a>

                                    <!-- Twitter Share -->
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}" 
                                       target="_blank" rel="noopener"
                                       class="group relative w-14 h-14 bg-gradient-to-br from-[#1DA1F2] to-[#1DA1F2]/80 rounded-2xl flex items-center justify-center text-white shadow-lg hover:shadow-xl transform hover:scale-110 hover:-translate-y-1 transition-all duration-300">
                                        <svg class="w-6 h-6 transform group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                        <div class="absolute inset-0 bg-white/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    </a>

                                    <!-- LinkedIn Share -->
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" 
                                       target="_blank" rel="noopener"
                                       class="group relative w-14 h-14 bg-gradient-to-br from-[#0077B5] to-[#0077B5]/80 rounded-2xl flex items-center justify-center text-white shadow-lg hover:shadow-xl transform hover:scale-110 hover:-translate-y-1 transition-all duration-300">
                                        <svg class="w-6 h-6 transform group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                        <div class="absolute inset-0 bg-white/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    </a>

                                    <!-- WhatsApp Share -->
                                    <a href="https://wa.me/?text={{ urlencode($news->title . ' | ' . url()->current()) }}" 
                                       target="_blank" rel="noopener"
                                       class="group relative w-14 h-14 bg-gradient-to-br from-[#25D366] to-[#25D366]/80 rounded-2xl flex items-center justify-center text-white shadow-lg hover:shadow-xl transform hover:scale-110 hover:-translate-y-1 transition-all duration-300">
                                        <svg class="w-6 h-6 transform group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.085"/>
                                        </svg>
                                        <div class="absolute inset-0 bg-white/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content Column -->
                        <div class="lg:w-3/5 scroll-trigger animate-slide-left">
                            <!-- Enhanced Title with Gradient -->
                            <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">
                                <span class="text-transparent bg-gradient-to-r from-[#213B75] to-[#F29F05] bg-clip-text">{{ $news->title }}</span>
                            </h1>
                            
                            <!-- Enhanced Accent Line -->
                            <div class="h-1 w-24 bg-gradient-to-r from-[#213B75] to-[#F29F05] rounded-full mb-8 animate-slide-right" style="animation-delay: 0.2s;"></div>
                            
                            <!-- Enhanced Description -->
                            <div class="text-[#222222]/80 mb-10 text-xl leading-relaxed font-medium animate-fade-in" style="animation-delay: 0.3s;">
                                {{ $news->description }}
                            </div>
                            
                            <!-- Enhanced Content -->
                            <div class="prose prose-lg max-w-none prose-headings:text-[#222222] prose-p:text-[#222222]/80 prose-p:leading-relaxed prose-a:text-[#213B75] prose-a:no-underline hover:prose-a:text-[#F29F05] prose-strong:text-[#213B75] animate-slide-up" style="animation-delay: 0.4s;">
                                {!! $news->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.layouts.main>
