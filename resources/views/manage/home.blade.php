<x-manage.layouts.main title="Home">
    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">{{ __('dashboard.welcome_to') }}</h1>

        {{-- Display success message if any --}}

        <!-- Cards Grid with 4 cards per line -->
        <div class="grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">

            {{-- Job Categories --}}
            <div class="card rounded-md shadow-base !bg-primary-500 dark:!bg-primary-500">
                <div class="card-body p-6">
                    <div class="flex-1 mb-5 items-center">
                        <h3 class="card-title !text-white">{{ __('dashboard.categories') }}</h3>
                    </div>
                    <div class="card-text">
                        <p class="text-white text-2xl font-bold">{{ $categoriesCount }}</p>
                    </div>
                </div>
            </div>

            {{-- Job Postings --}}
            <div class="card rounded-md shadow-base !bg-secondary-500 dark:!bg-secondary-500">
                <div class="card-body p-6">
                    <div class="flex-1 mb-5 items-center">
                        <h3 class="card-title !text-white">{{ __('dashboard.jobs') }}</h3>
                    </div>
                    <div class="card-text">
                        <p class="text-white text-2xl font-bold">{{ $jobsCount }}</p>
                    </div>
                </div>
            </div>

            {{-- Applications --}}
            <div class="card rounded-md shadow-base !bg-info-500 dark:!bg-info-500">
                <div class="card-body p-6">
                    <div class="flex-1 mb-5 items-center">
                        <h3 class="card-title !text-white">{{ __('dashboard.applications') }}</h3>
                    </div>
                    <div class="card-text">
                        <p class="text-white text-2xl font-bold">{{ $applicationsCount }}</p>
                    </div>
                </div>
            </div>

            {{-- Invitations --}}
            <div class="card rounded-md shadow-base !bg-success-500 dark:!bg-success-500">
                <div class="card-body p-6">
                    <div class="flex-1 mb-5 items-center">
                        <h3 class="card-title !text-white">{{ __('dashboard.invitations') }}</h3>
                    </div>
                    <div class="card-text">
                        <p class="text-white text-2xl font-bold">{{ $invitationsCount }}</p>
                    </div>
                </div>
            </div>

            {{-- Blogs --}}
            <div class="card rounded-md shadow-base !bg-warning-500 dark:!bg-warning-500">
                <div class="card-body p-6">
                    <div class="flex-1 mb-5 items-center">
                        <h3 class="card-title !text-white">{{ __('dashboard.blogs') }}</h3>
                    </div>
                    <div class="card-text">
                        <p class="text-white text-2xl font-bold">{{ $blogsCount }}</p>
                    </div>
                </div>
            </div>

            {{-- Clients --}}
            <div class="card rounded-md shadow-base !bg-danger-500 dark:!bg-danger-500">
                <div class="card-body p-6">
                    <div class="flex-1 mb-5 items-center">
                        <h3 class="card-title !text-white">{{ __('dashboard.clients') }}</h3>
                    </div>
                    <div class="card-text">
                        <p class="text-white text-2xl font-bold">{{ $clientsCount }}</p>
                    </div>
                </div>
            </div>

            {{-- Projects --}}
            <div class="card rounded-md shadow-base !bg-secondary-500 dark:!bg-secondary-500">
                <div class="card-body p-6">
                    <div class="flex-1 mb-5 items-center">
                        <h3 class="card-title !text-white">{{ __('dashboard.projects') }}</h3>
                    </div>
                    <div class="card-text">
                        <p class="text-white text-2xl font-bold">{{ $projectCount }}</p>
                    </div>
                </div>
            </div>

            {{-- News --}}
            <div class="card rounded-md shadow-base !bg-warning-500 dark:!bg-warning-500">
                <div class="card-body p-6">
                    <div class="flex-1 mb-5 items-center">
                        <h3 class="card-title !text-white">{{ __('dashboard.news') }}</h3>
                    </div>
                    <div class="card-text">
                        <p class="text-white text-2xl font-bold">{{ $newsCount }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-manage.layouts.main>
