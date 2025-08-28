<x-manage.layouts.main title="{{ __('manage.jobs') }} {{ __('manage.create') }}">
    <div class="max-w-5xl mx-auto">
        <form action="{{ route('manage.jobs.store') }}" method="POST" id="jobWizardForm">
            @csrf
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
                    <h1 class="text-2xl font-bold text-white flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        {{ __('dashboard.create_job') }}
                    </h1>
                </div>
                
                <!-- Wizard Progress -->
                <div class="px-6 pt-4">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-full flex items-center">
                            @foreach([__('dashboard.basic_information'), __('dashboard.interview_details'), __('dashboard.job_description'), __('dashboard.terms_conditions'), __('dashboard.job_questions')] as $index => $step)
                                <div class="relative flex-1 flex flex-col items-center">
                                    <div class="step-indicator w-10 h-10 rounded-full flex items-center justify-center text-white font-bold
                                        {{ $index === 0 ? 'bg-blue-600' : 'bg-danger-400' }}" data-step="{{ $index + 1 }}">
                                        {{ $index + 1 }}
                                    </div>
                                    <div class="text-xs mt-2 text-center {{ $index === 0 ? 'text-blue-600 font-medium' : 'text-gray-500' }}">
                                        {{ $step }}
                                    </div>
                                    @if($index < 4)
                                        <div class="absolute top-5 w-full h-0.5 left-1/2 bg-gray-300"></div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Form Content -->
                <div class="p-6">
                    <!-- Step 1: Basic Information -->
                    <div class="wizard-step" data-step="1">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="title_ar" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.title') }} ({{ __('dashboard.arabic') }}) <span class="text-red-500">*</span></label>
                                        <input type="text" name="title[ar]" id="title_ar" class="block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="title_en" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.title') }} ({{ __('dashboard.english') }}) <span class="text-red-500">*</span></label>
                                        <input type="text" name="title[en]" id="title_en" class="block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="salary" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.salary') }} <span class="text-red-500">*</span></label>
                                        <div class="relative rounded-md shadow-sm">
                                            <input type="number" name="salary" id="salary" step="0.01" class="block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <label for="job_posting_category_id" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.category') }} <span class="text-red-500">*</span></label>
                                        <select name="job_posting_category_id" id="job_posting_category_id" class="block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label for="is_public" class="inline-flex items-center mt-4">
                                            <input type="checkbox" name="is_public" id="is_public" value="1" class="form-checkbox h-5 w-5 text-blue-600">
                                            <span class="ml-2 text-sm text-gray-700">{{ __('dashboard.public') }}</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2: Interview Details -->
                    <div class="wizard-step hidden" data-step="2">
                        <div class="bg-gray-50 p-6 rounded-lg">                            
                            <div class="space-y-6">
                                <div>
                                    <label for="interview_type" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.interview_type') }} <span class="text-red-500">*</span></label>
                                    <select name="interview_type" id="interview_type" class="block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                        <option value="in_person">{{ __('dashboard.in_person') }}</option>
                                        <option value="phone">{{ __('dashboard.interview_phone') }}</option>
                                        <option value="video">{{ __('dashboard.video') }}</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.interview_dates') }} <span class="text-red-500">*</span></label>
                                    <div class="flex items-center">
                                        <button type="button" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="openModal('interviewDatesModal')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            {{ __('dashboard.manage_interview_dates') }}
                                        </button>
                                    </div>
                                    <input type="hidden" name="interview_dates" id="interviewDatesInput">
                                    <div id="interviewDatesPreview" class="mt-2 text-sm text-gray-600"></div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="location_ar" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.location') }} ({{ __('dashboard.arabic') }})</label>
                                        <input type="text" name="location[ar]" id="location_ar" class="block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                    <div>
                                        <label for="location_en" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.location') }} ({{ __('dashboard.english') }})</label>
                                        <input type="text" name="location[en]" id="location_en" class="block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="invitations_expiry" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.invitations_expiry') }} <span class="text-red-500">*</span></label>
                                    <input type="number" name="invitations_expiry" id="invitations_expiry" class="block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="168">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3: Job Description -->
                    <div class="wizard-step hidden" data-step="3">
                        <div class="bg-gray-50 p-6 rounded-lg">                            
                            <div class="space-y-6">
                                <div>
                                    <label for="description_ar" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.description') }} ({{ __('dashboard.arabic') }}) <span class="text-red-500">*</span></label>
                                    <textarea name="description[ar]" id="description_ar" rows="5" class="ckeditor block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                                <div>
                                    <label for="description_en" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.description') }} ({{ __('dashboard.english') }}) <span class="text-red-500">*</span></label>
                                    <textarea name="description[en]" id="description_en" rows="5" class="ckeditor block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4: Terms & Conditions -->
                    <div class="wizard-step hidden" data-step="4">
                        <div class="bg-gray-50 p-6 rounded-lg">                            
                            <div class="space-y-6">
                                <div>
                                    <label for="terms_ar" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.terms_conditions') }} ({{ __('dashboard.arabic') }})</label>
                                    <textarea name="terms[ar]" id="terms_ar" rows="4" class="ckeditor block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                                <div>
                                    <label for="terms_en" class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.terms_conditions') }} ({{ __('dashboard.english') }})</label>
                                    <textarea name="terms[en]" id="terms_en" rows="4" class="ckeditor block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 5: Job Questions -->
                    <div class="wizard-step hidden" data-step="5">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="space-y-6">
                                <p class="text-sm text-gray-600 mb-4">{{ __('dashboard.job_questions_description') }}</p>
                                
                                <div>
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="openModal('questionsModal')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        {{ __('dashboard.manage_job_questions') }}
                                    </button>
                                    <input type="hidden" name="questions" id="questionsInput">
                                </div>
                                
                                <div id="questionsPreview" class="mt-4">
                                    <div class="text-sm text-gray-500 italic">{{ __('dashboard.no_questions') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Form Navigation -->
                <div class="bg-gray-50 px-6 py-4 flex justify-between">
                    <button type="button" id="prevBtn" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50" disabled>
                    <iconify-icon class="" icon="{{ app()->getLocale() === 'ar' ? 'mdi:arrow-right' : 'mdi:arrow-left' }}"></iconify-icon>
                        <span class="ml-2">{{ __('dashboard.previous') }}</span>
                    </button>
                    <div>
                        <a href="{{ route('manage.jobs.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-3">
                            {{ __('dashboard.cancel') }}
                        </a>
                        <button type="button" id="nextBtn" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="mr-2">{{ __('dashboard.next') }}</span>
                            <iconify-icon icon="{{ app()->getLocale() === 'ar' ? 'mdi:arrow-left' : 'mdi:arrow-right' }}"></iconify-icon>
                        </button>
                        <button type="submit" id="submitBtn" class="hidden inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-success-600 hover:bg-success-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('dashboard.save') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <!-- Interview Dates Modal -->
    <div id="interviewDatesModal" class="hidden w-full fixed inset-0 bg-opacity-50 flex items-center justify-center z-50 overflow-y-auto" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="bg-white p-6 rounded-lg shadow-xl max-w-md w-full mx-auto my-auto">
            <div class="flex justify-between items-center mb-4 sticky top-0 bg-white">
                <h2 class="text-xl font-bold text-gray-800">{{ __('dashboard.manage_interview_dates') }}</h2>
                <button type="button" class="text-gray-400 hover:text-gray-500" onclick="closeModal('interviewDatesModal')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="mb-4">
                <div id="interviewDatesContainer" class="space-y-3 max-h-60 overflow-y-auto mb-4 p-2 border border-gray-200 rounded-md">
                </div>
            </div>
            
            <div class="space-y-4 sticky bottom-0 bg-white pt-2">
                <button type="button" class="w-full inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="addInterviewDate()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    {{ __('dashboard.add_new_date') }}
                </button>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="closeModal('interviewDatesModal')">
                        {{ __('dashboard.cancel') }}
                    </button>
                    <button type="button" class="inline-flex justify-center ml-2 mr-2 px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="saveInterviewDates()">
                        {{ __('dashboard.save_dates') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Questions Modal -->
    <div id="questionsModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 overflow-y-auto py-10">
        <div class="bg-white p-6 rounded-lg shadow-xl max-w-2xl w-full mx-auto my-auto">
            <div class="flex justify-between items-center mb-4 sticky top-0 bg-white">
                <h2 class="text-xl font-bold text-gray-800">{{ __('dashboard.manage_job_questions') }}</h2>
                <button type="button" class="text-gray-400 hover:text-gray-500" onclick="closeModal('questionsModal')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="mb-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm font-medium text-gray-700">{{ __('dashboard.questions') }} (<span id="questionCount">0</span>)</span>
                    <div>
                        <button type="button" class="text-sm text-blue-600 hover:text-blue-800 mr-3" id="collapseAllQuestions">
                            {{ __('dashboard.collapse_all') }}
                        </button>
                        <button type="button" class="text-sm text-blue-600 hover:text-blue-800" id="expandAllQuestions">
                            {{ __('dashboard.expand_all') }}
                        </button>
                    </div>
                </div>
                
                <div class="max-h-96 overflow-y-auto border border-gray-200 rounded-md p-3">
                    <div id="questionsContainer" class="space-y-4">
                    </div>
                </div>
            </div>
            
            <div class="mt-6 space-y-4 sticky bottom-0 bg-white pt-2">
                <button type="button" class="w-full inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="addQuestion()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    {{ __('dashboard.add_new_question') }}
                </button>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="closeModal('questionsModal')">
                        {{ __('dashboard.cancel') }}
                    </button>
                    <button type="button" class="inline-flex justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="saveQuestions()">
                        {{ __('dashboard.save') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    
<script>
// Modal management
function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Prevent scrolling behind modal
}

function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
    document.body.style.overflow = ''; // Re-enable scrolling
}

// Wizard Navigation
let currentStep = 1;
const totalSteps = 5;

function showStep(step) {
    // Hide all steps
    document.querySelectorAll('.wizard-step').forEach(el => {
        el.classList.add('hidden');
    });
    
    // Show the current step
    document.querySelector(`.wizard-step[data-step="${step}"]`).classList.remove('hidden');
    
    // Update step indicators
    document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
        const stepNum = index + 1;
        
        if (stepNum < step) {
            // Completed steps
            indicator.classList.remove('bg-gray-300', 'bg-danger-400');
            indicator.classList.add('bg-green-500');
            indicator.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
        } else if (stepNum === step) {
            // Current step
            indicator.classList.remove('bg-gray-300', 'bg-green-500');
            indicator.classList.add('bg-blue-600');
            indicator.textContent = stepNum;
        } else {
            // Future steps
            indicator.classList.remove('bg-blue-600', 'bg-green-500');
            indicator.classList.add('bg-gray-300');
            indicator.textContent = stepNum;
        }
    });
    
    // Update step titles
    document.querySelectorAll('.step-indicator + div').forEach((title, index) => {
        const stepNum = index + 1;
        if (stepNum <= step) {
            title.classList.remove('text-gray-500');
            title.classList.add('text-blue-600', 'font-medium');
        } else {
            title.classList.remove('text-blue-600', 'font-medium');
            title.classList.add('text-gray-500');
        }
    });
    
    // Update navigation buttons
    document.getElementById('prevBtn').disabled = step === 1;
    
    if (step === totalSteps) {
        document.getElementById('nextBtn').classList.add('hidden');
        document.getElementById('submitBtn').classList.remove('hidden');
    } else {
        document.getElementById('nextBtn').classList.remove('hidden');
        document.getElementById('submitBtn').classList.add('hidden');
    }
    
    // Update progress bar connections
    document.querySelectorAll('.step-indicator + div + div').forEach((connector, index) => {
        const stepNum = index + 1;
        if (stepNum < step) {
            connector.classList.remove('bg-gray-300');
            connector.classList.add('bg-green-500');
        } else {
            connector.classList.remove('bg-green-500');
            connector.classList.add('bg-gray-300');
        }
    });
    
    // Scroll to top of form
    document.querySelector('.wizard-step:not(.hidden)').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function nextStep() {
    if (validateCurrentStep()) {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}

function validateCurrentStep() {
    let isValid = true;
    const currentStepEl = document.querySelector(`.wizard-step[data-step="${currentStep}"]`);
    
    // Reset previous validation errors
    currentStepEl.querySelectorAll('.validation-error').forEach(el => el.remove());
    currentStepEl.querySelectorAll('.border-red-500').forEach(el => {
        el.classList.remove('border-red-500');
        el.classList.add('border-gray-300');
    });
    
    // Check required fields in current step
    const requiredFields = currentStepEl.querySelectorAll('[required]');
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.classList.remove('border-gray-300');
            field.classList.add('border-red-500');
            
            // Add error message
            const errorMsg = document.createElement('p');
            errorMsg.className = 'text-red-500 text-xs mt-1 validation-error';
            errorMsg.textContent = 'This field is required';
            field.parentNode.appendChild(errorMsg);
        }
    });
    
    // Special validation for step 2 (Interview Dates)
    if (currentStep === 2) {
        const interviewDatesInput = document.getElementById('interviewDatesInput');
        try {
            const dates = JSON.parse(interviewDatesInput.value || '[]');
            if (!dates.length) {
                isValid = false;
                
                // Add error notification
                showNotification('Please add at least one interview date', 'error');
                
                // Highlight the button
                const dateButton = document.querySelector('button[onclick="openModal(\'interviewDatesModal\')"]');
                dateButton.classList.add('ring-2', 'ring-red-500');
                setTimeout(() => {
                    dateButton.classList.remove('ring-2', 'ring-red-500');
                }, 3000);
            }
        } catch (e) {
            console.error('Error parsing interview dates:', e);
            isValid = false;
        }
    }
    
    if (!isValid) {
        // Scroll to first error
        const firstError = currentStepEl.querySelector('.border-red-500');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstError.focus();
        }
    }
    
    return isValid;
}

// Interview Dates Logic
function addInterviewDate(value = '') {
    const container = document.getElementById('interviewDatesContainer');
    const dateGroup = document.createElement('div');
    dateGroup.className = 'flex items-center space-x-2 bg-gray-50 p-2 rounded border';
    
    // Create date input
    const input = document.createElement('input');
    input.type = 'datetime-local';
    input.className = 'flex-grow border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500';
    input.value = value;
    
    // Create remove button
    const removeBtn = document.createElement('button');
    removeBtn.type = 'button';
    removeBtn.className = 'flex items-center justify-center h-8 w-8 rounded-full text-red-500 hover:bg-red-100';
    removeBtn.innerHTML = '<svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>';
    removeBtn.onclick = function() {
        dateGroup.remove();
        updateDateCount();
    };
    
    // Add elements to container
    dateGroup.appendChild(input);
    dateGroup.appendChild(removeBtn);
    container.appendChild(dateGroup);
    
    updateDateCount();
}

function updateDateCount() {
    const count = document.querySelectorAll('#interviewDatesContainer > div').length;
    document.getElementById('dateCount').textContent = count;
}

function saveInterviewDates() {
    const inputs = document.querySelectorAll('#interviewDatesContainer input[type="datetime-local"]');
    const dates = Array.from(inputs).map(input => input.value).filter(val => val);
    document.getElementById('interviewDatesInput').value = JSON.stringify(dates);
    
    // Update preview
    updateInterviewDatesPreview(dates);
    
    // Show notification
    showNotification(`${dates.length} interview date${dates.length !== 1 ? 's' : ''} saved!`, 'success');
    
    closeModal('interviewDatesModal');
}

function updateInterviewDatesPreview(dates) {
    const previewEl = document.getElementById('interviewDatesPreview');
    
    if (dates.length === 0) {
        previewEl.innerHTML = '<div class="text-sm text-gray-500 italic">No interview dates added yet.</div>';
        return;
    }
    
    previewEl.innerHTML = '';
    const datesList = document.createElement('div');
    datesList.className = 'flex flex-wrap gap-2 mt-2';
    
    dates.forEach(date => {
        const dateChip = document.createElement('div');
        dateChip.className = 'px-2 py-1 bg-blue-100 text-blue-800 rounded-md text-xs';
        dateChip.textContent = new Date(date).toLocaleDateString();
        datesList.appendChild(dateChip);
    });
    
    previewEl.appendChild(datesList);
}

// Questions Logic
function addQuestion(data = { ar: '', en: '', type: 'text' }) {
    const container = document.getElementById('questionsContainer');
    const questionId = 'question-' + Date.now();
    const questionCard = document.createElement('div');
    questionCard.className = 'bg-gray-50 p-4 rounded-lg border border-gray-200 relative question-item';
    questionCard.id = questionId;
    
    questionCard.innerHTML = `
        <div class="flex justify-between items-center mb-2 cursor-pointer question-header" onclick="toggleQuestion('${questionId}-content')">
            <h3 class="font-medium text-gray-800 question-title">
                ${data.en ? truncateText(data.en, 40) : '{{ __('dashboard.question') }}'}
            </h3>
            <div class="flex items-center">
                <span class="text-xs px-2 py-1 bg-blue-100 text-blue-800 rounded mr-2">${data.type}</span>
                <button type="button" class="toggle-btn">
                    <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
        </div>
        
        <div class="absolute top-3 right-3">
            <button type="button" class="text-red-500 hover:bg-red-100 p-1 rounded-full" onclick="removeQuestion('${questionId}')">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <div id="${questionId}-content" class="question-content">
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.question_type') }}</label>
                    <select class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 question-type" onchange="updateQuestionLabel('${questionId}', this)">
                        <option value="text" ${data.type === 'text' ? 'selected' : ''}>{{ __('dashboard.text') }}</option>
                        <option value="textarea" ${data.type === 'textarea' ? 'selected' : ''}>{{ __('dashboard.textarea') }}</option>
                    </select>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.question') }} ({{ __('dashboard.arabic') }})</label>
                    <input type="text" placeholder="" value="${data.ar}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 question-ar">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('dashboard.question') }} ({{ __('dashboard.english') }})</label>
                    <input type="text" placeholder="" value="${data.en}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 question-en" onchange="updateQuestionTitle('${questionId}', this)">
                </div>
            </div>
            
            <div class="option-container mt-4 ${data.type === 'radio' ? '' : 'hidden'}">
                <div class="flex justify-between items-center mb-2">
                    <label class="block text-sm font-medium text-gray-700">Options</label>
                    <button type="button" class="text-sm text-blue-600 hover:text-blue-800" onclick="addOption('${questionId}')">
                        Add Option
                    </button>
                </div>
                <div class="options-list space-y-2">
                    <!-- Options will be added here for radio questions -->
                </div>
            </div>
        </div>
    `;
    
    container.appendChild(questionCard);
    
    // Show options container only for radio type
    const selectElement = questionCard.querySelector('.question-type');
    selectElement.addEventListener('change', function() {
        const optionsContainer = questionCard.querySelector('.option-container');
        if (this.value === 'radio') {
            optionsContainer.classList.remove('hidden');
            // Add at least one option if none exists
            if (questionCard.querySelectorAll('.options-list > div').length === 0) {
                addOption(questionId);
            }
        } else {
            optionsContainer.classList.add('hidden');
        }
    });
    
    // Initialize with options if it's radio type
    if (data.type === 'radio' && data.options && Array.isArray(data.options)) {
        data.options.forEach(option => {
            addOption(questionId, option);
        });
    } else if (data.type === 'radio') {
        // Add at least one empty option for radio type
        addOption(questionId);
    }
    
    updateQuestionCount();
}

function addOption(questionId, optionData = { ar: '', en: '' }) {
    const optionsContainer = document.querySelector(`#${questionId} .options-list`);
    const optionDiv = document.createElement('div');
    optionDiv.className = 'flex items-center space-x-2 option-item';
    
    optionDiv.innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 flex-grow">
            <input type="text" placeholder="Arabic Option" value="${optionData.ar || ''}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 option-ar">
            <input type="text" placeholder="English Option" value="${optionData.en || ''}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 option-en">
        </div>
        <button type="button" class="flex-shrink-0 text-red-500 hover:bg-red-100 p-1 rounded-full" onclick="this.closest('.option-item').remove()">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    `;
    
    optionsContainer.appendChild(optionDiv);
}

function truncateText(text, maxLength) {
    return text.length > maxLength ? text.substring(0, maxLength) + '...' : text;
}

function updateQuestionTitle(id, input) {
    const title = document.querySelector(`#${id} .question-title`);
    title.textContent = input.value ? truncateText(input.value, 40) : '{{ __('dashboard.question') }}';
}

function updateQuestionLabel(id, select) {
    const label = document.querySelector(`#${id} .text-xs`);
    label.textContent = select.value;
    
    // Show/hide options container based on type
    const optionsContainer = document.querySelector(`#${id} .option-container`);
    if (select.value === 'radio') {
        optionsContainer.classList.remove('hidden');
        // Add at least one option if none exists
        if (document.querySelectorAll(`#${id} .options-list > div`).length === 0) {
            addOption(id);
        }
    } else {
        optionsContainer.classList.add('hidden');
    }
}

function toggleQuestion(contentId) {
    const content = document.getElementById(contentId);
    const isHidden = content.classList.contains('hidden');
    
    if (isHidden) {
        content.classList.remove('hidden');
    } else {
        content.classList.add('hidden');
    }
    
    // Toggle the arrow icon
    const toggleBtn = content.parentElement.querySelector('.toggle-btn svg');
    if (isHidden) {
        toggleBtn.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />';
    } else {
        toggleBtn.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />';
    }
}

function removeQuestion(id) {
    document.getElementById(id).remove();
    updateQuestionCount();
}

function updateQuestionCount() {
    const count = document.querySelectorAll('#questionsContainer > div').length;
    document.getElementById('questionCount').textContent = count;
}

function collapseAllQuestions() {
    document.querySelectorAll('.question-content').forEach(content => {
        content.classList.add('hidden');
    });
    document.querySelectorAll('.toggle-btn svg').forEach(icon => {
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />';
    });
}

function expandAllQuestions() {
    document.querySelectorAll('.question-content').forEach(content => {
        content.classList.remove('hidden');
    });
    document.querySelectorAll('.toggle-btn svg').forEach(icon => {
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />';
    });
}

function saveQuestions() {
    const containers = document.querySelectorAll('#questionsContainer > div');
    const questions = Array.from(containers).map(div => {
        const questionObj = {
            question: {
                ar: div.querySelector('.question-ar').value,
                en: div.querySelector('.question-en').value
            },
            type: div.querySelector('.question-type').value
        };
        
        // Add options for radio type
        if (questionObj.type === 'radio') {
            const optionElements = div.querySelectorAll('.option-item');
            questionObj.options = Array.from(optionElements).map(optEl => ({
                ar: optEl.querySelector('.option-ar').value,
                en: optEl.querySelector('.option-en').value
            }));
        }
        
        return questionObj;
    });
    
    document.getElementById('questionsInput').value = JSON.stringify(questions);
    
    // Update preview
    updateQuestionsPreview(questions);
    
    // Show notification
    showNotification(`${questions.length} question${questions.length !== 1 ? 's' : ''} saved!`, 'success');
    
    closeModal('questionsModal');
}

function updateQuestionsPreview(questions) {
    const previewEl = document.getElementById('questionsPreview');
    
    if (questions.length === 0) {
        previewEl.innerHTML = '<div class="text-sm text-gray-500 italic">No questions added yet.</div>';
        return;
    }
    
    previewEl.innerHTML = '';
    const questionsList = document.createElement('div');
    questionsList.className = 'space-y-3';
    
    questions.forEach((q, index) => {
        const questionItem = document.createElement('div');
        questionItem.className = 'p-3 bg-gray-100 rounded-md';
        
        questionItem.innerHTML = `
            <div class="flex justify-between">
                <div class="font-medium">${index + 1}. ${q.question.en || 'Untitled Question'}</div>
                <div class="text-xs px-2 py-1 bg-blue-100 text-blue-800 rounded">${q.type}</div>
            </div>
            <div class="text-sm text-gray-600 mt-1">${q.question.ar || ''}</div>
        `;
        
        questionsList.appendChild(questionItem);
    });
    
    previewEl.appendChild(questionsList);
}

// Notification system
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `fixed bottom-4 right-4 px-4 py-2 rounded shadow-lg z-50 ${
        type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
    }`;
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    // Set up wizard navigation
    document.getElementById('nextBtn').addEventListener('click', nextStep);
    document.getElementById('prevBtn').addEventListener('click', prevStep);
    
    // Initialize wizard
    showStep(currentStep);
    
    // Close modal when clicking outside
    const modals = document.querySelectorAll('.fixed.inset-0');
    modals.forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal(modal.id);
            }
        });
    });
    
    // Initialize with a single empty date field
    if (document.getElementById('interviewDatesContainer').children.length === 0) {
        addInterviewDate();
    }
    
    // Check for existing values
    const interviewDatesInput = document.getElementById('interviewDatesInput');
    if (interviewDatesInput.value) {
        try {
            const dates = JSON.parse(interviewDatesInput.value);
            if (Array.isArray(dates) && dates.length > 0) {
                // Clear container first
                document.getElementById('interviewDatesContainer').innerHTML = '';
                // Add existing dates
                dates.forEach(date => addInterviewDate(date));
                // Update preview
                updateInterviewDatesPreview(dates);
            }
        } catch (e) {
            console.error('Error parsing interview dates:', e);
        }
    }
    
    // Check for existing questions
    const questionsInput = document.getElementById('questionsInput');
    if (questionsInput.value) {
        try {
            const questions = JSON.parse(questionsInput.value);
            if (Array.isArray(questions) && questions.length > 0) {
                // Add existing questions
                questions.forEach(q => addQuestion({
                    ar: q.question.ar,
                    en: q.question.en,
                    type: q.type,
                    options: q.options
                }));
                // Update preview
                updateQuestionsPreview(questions);
            }
        } catch (e) {
            console.error('Error parsing questions:', e);
        }
    }
    
    // Set up toggle all dates functionality
    const toggleAllDatesBtn = document.getElementById('toggleAllDates');
    if (toggleAllDatesBtn) {
        toggleAllDatesBtn.addEventListener('click', function() {
            // Nothing to collapse in dates, but we can add if needed
            this.textContent = this.textContent === 'Expand All' ? 'Collapse All' : 'Expand All';
        });
    }
    
    // Set up expand/collapse all questions functionality
    const expandAllQuestionsBtn = document.getElementById('expandAllQuestions');
    if (expandAllQuestionsBtn) {
        expandAllQuestionsBtn.addEventListener('click', expandAllQuestions);
    }
    
    const collapseAllQuestionsBtn = document.getElementById('collapseAllQuestions');
    if (collapseAllQuestionsBtn) {
        collapseAllQuestionsBtn.addEventListener('click', collapseAllQuestions);
    }
    
    // Form submission handling
    const form = document.getElementById('jobWizardForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Validate all steps before submission
            let allValid = true;
            
            for (let i = 1; i <= totalSteps; i++) {
                currentStep = i;
                if (!validateCurrentStep()) {
                    allValid = false;
                    break;
                }
            }
            
            if (!allValid) {
                e.preventDefault();
                showNotification('Please fix the errors before submitting', 'error');
            } else {
                // Show loading state
                document.getElementById('submitBtn').disabled = true;
                document.getElementById('submitBtn').innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Submitting...
                `;
            }
        });
    }
    
    // Initialize rich text editors if present
    if (typeof ClassicEditor !== 'undefined') {
        document.querySelectorAll('.ckeditor').forEach(textarea => {
            ClassicEditor
                .create(textarea)
                .catch(error => {
                    console.error(error);
                });
        });
    }
    
    // Initialize counts
    updateDateCount();
    updateQuestionCount();
});
</script>
</x-manage.layouts.main>