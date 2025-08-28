<x-frontend.layouts.main>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 max-w-6xl mt-[100px]">
        <!-- Job Details Section -->
        <section class="mb-18 animate-fade-in">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-primary text-white p-6">
                    <h1 class="text-3xl font-bold mb-2">{{ $job->title }}</h1>
                    <div class="flex flex-wrap gap-4 text-sm">
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            <span>{{ $job->location }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-briefcase {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            <span>{{ $job->category->title }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-money-bill-wave {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            <span>{{ number_format($job->salary, 2) }} EGP</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            <span>{{ $job->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="md:col-span-2">
                            <h2 class="text-xl font-semibold mb-4">{{ __('frontend.job_description') }}</h2>
                            <p class="mb-4">
                                {!! $job->description !!}
                            </p>
                            
                            <h3 class="text-lg font-semibold mt-6 mb-3">{{ __('frontend.job_terms') }}:</h3>
                            <ul class="list-disc {{ app()->getLocale() == 'ar' ? 'pr-2' : 'pl-2' }} space-y-2 mb-4">
                                {!! $job->terms !!}
                            </ul>
                            
                            <h3 class="text-lg font-semibold mt-6 mb-3">{{ __('frontend.questions') }}:</h3>
                            <ul class="list-disc {{ app()->getLocale() == 'ar' ? 'pr-2' : 'pl-2' }} space-y-2">
                                @foreach ($job->questions as $question)
                                    <li>{{ $question->question }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="md:col-span-1">
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <h3 class="text-lg font-semibold mb-4">{{ __('frontend.interview') }}</h3>
                                
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-sm text-gray-500">{{ __('frontend.department') }}</h4>
                                        <p class="font-medium">{{ $job->category->title }}</p>
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-sm text-gray-500">{{ __('frontend.interview_type') }}</h4>
                                        <p class="font-medium">{{ __('frontend.' . $job->interview_type) }}
                                    </div>
                                </div>
                                
                                <div class="mt-6">
                                    <button id="apply-now-btn" class="w-full bg-primary hover:bg-red-800 text-white font-medium py-3 px-4 rounded-lg transition-colors flex items-center justify-center">
                                        <i class="fas fa-paper-plane {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                                        {{ __('frontend.apply_now') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Application Modal -->
    <div id="application-modal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity"></div>
        <div class="fixed inset-0 overflow-y-auto">
            <form id="application-form" method="POST" action="" class="space-y-4 mt-16">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-primary bg-opacity-20 sm:mx-0 sm:h-10 sm:w-10">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div class="mt-3 text-center">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('frontend.apply_for_position') }}</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">{{ __('frontend.enter_email_to_apply') }}</p>
                                </div>
                                <div class="mt-4">
                                        @csrf
                                        <div>
                                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('frontend.email_address') }}</label>
                                            <input type="email" name="email" id="application-email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 p-2 border">
                                        </div>
                                        <div class="hidden" id="application-error">
                                            <p class="text-sm text-red-600"></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="submit" id="submit-application" class="inline-flex w-full justify-center rounded-md border border-transparent bg-primary px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                            {{ __('frontend.continue') }}
                        </button>
                        <button type="button" id="close-modal" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm">
                            {{ __('frontend.cancel') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</x-frontend.layouts.main>
    
<style>
    /* Custom styles */
    .step-active {
        color: #b32025;
        border-color: #b32025;
    }
    
    .step-completed {
        background-color: #b32025;
        color: white;
        border-color: #b32025;
    }
    
    .step-line {
        height: 2px;
        background-color: #d1d5db;
        flex: 1;
        margin: 0 8px;
        transition: background-color 0.3s ease;
    }
    
    .step-line-active {
        background-color: #b32025;
    }
    
    /* File upload styling */
    .file-upload-container {
        position: relative;
        overflow: hidden;
    }
    
    .file-upload-container input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        cursor: pointer;
        display: block;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #94a3b8;
        border-radius: 3px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #64748b;
    }
    
    /* Time slot selection styling */
    .time-slot {
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .time-slot:hover {
        border-color: #b32025;
        background-color: rgba(179, 32, 37, 0.05);
    }
    
    .time-slot.selected {
        background-color: #b32025;
        color: white;
        border-color: #b32025;
    }
    
    .time-slot.disabled {
        opacity: 0.5;
        cursor: not-allowed;
        background-color: #f3f4f6;
    }
    
    /* Modal animation */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideIn {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .modal-open {
        display: block;
        animation: fadeIn 0.3s ease-out forwards;
    }
    
    .modal-open .bg-white {
        animation: slideIn 0.3s ease-out forwards;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const applyButton = document.getElementById('apply-now-btn');
        const applicationModal = document.getElementById('application-modal');
        const closeModalButton = document.getElementById('close-modal');
        const submitApplicationButton = document.getElementById('submit-application');
        const applicationForm = document.getElementById('application-form');
        const applicationEmail = document.getElementById('application-email');
        const applicationError = document.getElementById('application-error');
        
        // Show modal when apply button is clicked
        applyButton.addEventListener('click', function() {
            applicationModal.classList.add('modal-open');
            applicationModal.classList.remove('hidden');
        });
        
        // Close modal function
        function closeModal() {
            applicationModal.classList.remove('modal-open');
            setTimeout(() => {
                applicationModal.classList.add('hidden');
                applicationError.classList.add('hidden');
                applicationForm.reset();
            }, 300);
        }
        
        // Close modal when close button is clicked
        closeModalButton.addEventListener('click', closeModal);
        
        // Close modal when clicking outside
        applicationModal.addEventListener('click', function(event) {
            if (event.target === applicationModal || event.target.classList.contains('bg-opacity-50')) {
                closeModal();
            }
        });
        
        // Prevent modal close when clicking inside the modal content
        const modalContent = applicationModal.querySelector('.bg-white');
        if (modalContent) {
            modalContent.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        }
        
        // Handle escape key to close modal
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && !applicationModal.classList.contains('hidden')) {
                closeModal();
            }
        });
    });
</script>