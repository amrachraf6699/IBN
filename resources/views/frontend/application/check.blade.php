<x-frontend.layouts.main>
    @php
        $settings = settings();
    @endphp
    <div class="container mx-auto px-4 py-12 max-w-4xl mt-16">
        <!-- Application Status Card -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
            <!-- Header -->
            <div class="bg-primary text-white p-6">
                <h1 class="text-2xl font-bold">{{ __('frontend.application_status') }}</h1>
                <p class="text-white/80">{{ __('frontend.application_reference') }}: {{ $application->uuid }}</p>
            </div>
            
            <!-- Status Section -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center mb-4">
                    <div class="{{ app()->getLocale() == 'ar' ? 'ml-4' : 'mr-4' }}">
                        @if($application->status == 'pending')
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                                <i class="fas fa-clock text-yellow-500 text-xl"></i>
                            </div>
                        @elseif($application->status == 'approved')
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-check text-green-500 text-xl"></i>
                            </div>
                        @elseif($application->status == 'rejected')
                            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center">
                                <i class="fas fa-times text-red-500 text-xl"></i>
                            </div>
                        @else
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-sync-alt text-blue-500 text-xl"></i>
                            </div>
                        @endif
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold">
                            {{ $application->status }}
                        </h2>
                        <p class="text-gray-600">{{ __('frontend.last_updated') }}: {{ $application->updated_at->format('M d, Y - h:i A') }}</p>
                    </div>
                </div>
                
                <!-- Progress Bar -->
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                    @if($application->status == 'pending')
                        <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 25%"></div>
                    @elseif($application->status == 'in_review')
                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%"></div>
                    @elseif($application->status == 'approved')
                        <div class="bg-green-500 h-2.5 rounded-full" style="width: 100%"></div>
                    @elseif($application->status == 'rejected')
                        <div class="bg-red-500 h-2.5 rounded-full" style="width: 100%"></div>
                    @endif
                </div>
            </div>
            
            <!-- Applicant Information -->
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold mb-4">{{ __('frontend.applicant_information') }}</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">{{ __('frontend.email') }}</p>
                        <p class="font-medium">{{ $application->email }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">{{ __('frontend.application_date') }}</p>
                        <p class="font-medium">{{ $application->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Job Information -->
            <div class="p-6">
                <h3 class="text-lg font-semibold mb-4">{{ __('frontend.job_information') }}</h3>
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="text-sm text-gray-500">{{ __('frontend.job_title') }}</p>
                        <p class="font-medium">{{ $application->jobPosting->title }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">{{ __('frontend.salary') }}</p>
                        <p class="font-medium">{{ number_format($application->jobPosting->salary, 2) }} EGP</p>
                    </div>
                </div>
                
                <div class="mb-4">
                    <p class="text-sm text-gray-500 mb-1">{{ __('frontend.job_description') }}</p>
                    <div class="bg-gray-50 p-4 rounded-lg text-gray-700">
                        {!! Str::limit($application->jobPosting->description, 200) !!}
                    </div>
                </div>
                
                @if($application->interview_date)
                <div>
                    <p class="text-sm text-gray-500">{{ __('frontend.interview_date') }}</p>
                    <p class="font-medium">
                        @php
                            $dateTime = new DateTime($application->interview_date);
                            echo $dateTime->format('l, F j, Y - g:i A');
                        @endphp
                    </p>
                </div>
                @endif
            </div>
        </div>
        
        <!-- Social Media Section -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6">
                <h3 class="text-lg font-semibold mb-4">{{ __('frontend.follow_us') }}</h3>
                <p class="text-gray-600 mb-4">{{ __('frontend.social_media_message') }}</p>
                @php
                    $socialLinks = json_decode($settings->social_links , true);
                @endphp
                <div class="flex rtl:space-x-reverse space-x-4">
                    <a href="{{ $socialLinks['facebook'] }}" class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ $socialLinks['twitter'] }}" class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="{{ $socialLinks['instagram'] }}" class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white hover:from-purple-600 hover:to-pink-600 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-frontend.layouts.main>
