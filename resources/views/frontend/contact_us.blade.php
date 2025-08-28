@php
    $settings = settings();
@endphp
<x-frontend.layouts.main :title="__('frontend.contact_us')">
<section class="py-3 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="text-center mb-6 scroll-trigger">
            <span class="inline-block text-2xl text-primary font-semibold mb-2 relative">
                {{ __('frontend.get_in_touch') }}
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Contact Information -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger h-full">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-dark mb-6">{{ __('frontend.contact_info') }}</h3>
                        
                        <!-- Address -->
                        <div class="flex items-start mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mr-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-dark mb-1">{{ __('frontend.address') }}</h4>
                                <p class="text-gray-600">
                                    {{ $settings->address }}
                                </p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mr-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-dark mb-1">{{ __('frontend.email') }}</h4>
                                <a href="mailto:{{ $settings->email }}" class="text-primary hover:text-dark transition-colors duration-300">
                                    {{ $settings->email }}
                                </a>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="flex items-start mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mr-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-dark mb-1">{{ __('frontend.our_phone') }}</h4>
                                <a href="tel:{{ $settings->phone }}" class="text-primary hover:text-dark transition-colors duration-300">
                                    {{ $settings->phone }}
                                </a>
                            </div>
                        </div>
                        
                        <!-- Social Media Links (Optional) -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h4 class="text-lg font-semibold text-dark mb-4">{{ __('frontend.follow_us') }}</h4>
                                @php
                                    $socialLinks = json_decode($settings->social_links , true);
                                @endphp
                                <div class="flex rtl:space-x-reverse space-x-4">
                                    <a href="{{ $socialLinks['facebook'] }}" class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="{{ $socialLinks['twitter'] }}" class="w-10 h-10 rounded-full bg-black flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="w-4 h-4 text-white" viewBox="0 0 512 512" fill="currentColor"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                    </a>
                                    <a href="{{ $socialLinks['instagram'] }}" class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white hover:from-purple-600 hover:to-pink-600 transition-colors">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="{{ $socialLinks['linkedin'] }}" class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center text-white hover:bg-blue-800 transition-colors">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg scroll-trigger h-full">
                    <div class="h-2 bg-primary"></div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-dark mb-6">{{ __('frontend.send_message') }}</h3>
                        
                        @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                        @endif
                        
                        <form action="{{ route('contact_us.send') }}" method="POST">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- Name Field -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">{{ __('frontend.name') }} <span class="text-red-500">*</span></label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        id="name" 
                                        class="w-full px-4 py-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors" 
                                        value="{{ old('name') }}" 
                                        required
                                    >
                                    @error('name')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <!-- Email Field -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('frontend.email') }} <span class="text-red-500">*</span></label>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        id="email" 
                                        class="w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors" 
                                        value="{{ old('email') }}" 
                                        required
                                    >
                                    @error('email')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Message Field -->
                            <div class="mb-6">
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">{{ __('frontend.message') }} <span class="text-red-500">*</span></label>
                                <textarea 
                                    name="message" 
                                    id="message" 
                                    rows="6" 
                                    class="w-full px-4 py-2 border @error('message') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors" 
                                    required
                                >{{ old('message') }}</textarea>
                                @error('message')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-opacity-90 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                    </svg>
                                    {{ __('frontend.send_message') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-frontend.layouts.main>