<x-frontend.layouts.main :title="__('frontend.jobs')">
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Job Filters (Optional) -->
        <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10 scroll-trigger">
            <div class="h-2 bg-primary"></div>
            <div class="p-6">
                <form action="" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Search Keyword -->
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-1">{{ __('frontend.search') }}</label>
                        <input 
                            type="text" 
                            name="search" 
                            id="search" 
                            placeholder="{{ __('frontend.search') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors" 
                            value="{{ request('search') }}"
                        >
                    </div>
                    
                    <!-- Salary Range -->
                    <div>
                        <label for="salary" class="block text-sm font-medium text-gray-700 mb-1">{{ __('frontend.salary_range') }}</label>
                        <select 
                            name="salary" 
                            id="salary" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors"
                        >
                            <option value="">{{ __('frontend.any_salary') }}</option>
                            <option value="0-30000" {{ request('salary') == '0-30000' ? 'selected' : '' }}>0 - 30,000</option>
                            <option value="30000-50000" {{ request('salary') == '30000-50000' ? 'selected' : '' }}>30,000 - 50,000</option>
                            <option value="50000-80000" {{ request('salary') == '50000-80000' ? 'selected' : '' }}>50,000 - 80,000</option>
                            <option value="80000-100000" {{ request('salary') == '80000-100000' ? 'selected' : '' }}>80,000 - 100,000</option>
                            <option value="100001" {{ request('salary') == '100001' ? 'selected' : '' }}>100,000+</option>
                        </select>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="flex items-end">
                        <button type="submit" class="w-full px-6 py-2 bg-primary text-white rounded-lg hover:bg-opacity-90 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            {{ __('frontend.search') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Job Count -->
        <div class="mb-6 text-gray-600">
            {{ __('frontend.showing') }} <span class="font-semibold">{{ $jobs->count() }}</span> {{ __('frontend.of') }} <span class="font-semibold">{{ $jobs->total() }}</span> {{ __('frontend.jobs') }}
        </div>

        <!-- Job Listings -->
        <div class="space-y-6 mb-10">
            @forelse($jobs as $job)
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift scroll-trigger">
                <div class="h-2 bg-primary"></div>
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between">
                        <div class="mb-4 md:mb-0 md:pr-6 flex-1">
                            <!-- Job Title and Company -->
                            <h3 class="text-xl font-bold text-dark mb-2">{{ $job->title }}</h3>
                            @if(isset($job->company))
                            <p class="text-gray-600 mb-4">
                                <span class="font-medium">{{ $job->company }}</span>
                            </p>
                            @endif
                            
                            <!-- Job Details -->
                            <div class="flex flex-wrap gap-4 text-sm">
                                <!-- Salary -->
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                    </svg>
                                    <span>{{ $job->salary }}</span>
                                </div>
                                
                                <!-- Location -->
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>{{ $job->location }}</span>
                                </div>
                                
                                <!-- Job Type (if available) -->
                                @if(isset($job->type))
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                    </svg>
                                    <span>{{ $job->type }}</span>
                                </div>
                                @endif
                                
                                <!-- Posted Date (if available) -->
                                @if(isset($job->posted_at))
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                    </svg>
                                    <span>{{ $job->posted_at->diffForHumans() }}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Apply Button -->
                        <div class="flex flex-col items-center md:items-end space-y-3">
                            <a href="{{ route('job.show' , $job) }}" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-opacity-90 transition-colors duration-300 w-full md:w-auto justify-center">
                                {{ __('frontend.view_details') }}
                                                            @if(app()->getLocale() == 'en')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.707 5.293a1 1 0 010 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-white rounded-xl overflow-hidden shadow-lg p-8 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-xl font-bold text-dark mb-2">{{ __('frontend.no_jobs_found') }}</h3>
                <p class="text-gray-600">{{ __('frontend.try_different_search') }}</p>
            </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        <div class="mt-8">
            {{ $jobs->links() }}
        </div>
    </div>
</section>
</x-frontend.layouts.main>
