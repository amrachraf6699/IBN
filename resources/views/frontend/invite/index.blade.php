<x-frontend.layouts.main>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 max-w-6xl mt-[100px]">
        <!-- Job Details Section -->
        <section class="mb-18 animate-fade-in">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-primary text-white p-6">
                    <h1 class="text-3xl font-bold mb-2">{{ $invite->jobPosting->title }}</h1>
                    <div class="flex flex-wrap gap-4 text-sm">
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            <span>{{ $invite->jobPosting->location }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-briefcase {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            <span>{{ $invite->jobPosting->category->title }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-money-bill-wave {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            <span>{{ number_format($invite->jobPosting->salary, 2) }} EGP</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                            <span>{{ $invite->jobPosting->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="md:col-span-2">
                            <h2 class="text-xl font-semibold mb-4">{{ __('frontend.job_description') }}</h2>
                            <p class="mb-4">
                                {!! $invite->jobPosting->description !!}
                            </p>
                            
                            <h3 class="text-lg font-semibold mt-6 mb-3">{{ __('frontend.job_terms') }}:</h3>
                            <ul class="list-disc {{ app()->getLocale() == 'ar' ? 'pr-2' : 'pl-2' }} space-y-2 mb-4">
                                {!! $invite->jobPosting->terms !!}
                            </ul>
                            
                            <h3 class="text-lg font-semibold mt-6 mb-3">{{ __('frontend.questions') }}:</h3>
                            <ul class="list-disc {{ app()->getLocale() == 'ar' ? 'pr-2' : 'pl-2' }} space-y-2">
                                @foreach ($invite->jobPosting->questions as $question)
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
                                        <p class="font-medium">{{ $invite->jobPosting->category->title }}</p>
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-sm text-gray-500">{{ __('frontend.interview_type') }}</h4>
                                        <p class="font-medium">{{ __('frontend.' . $invite->jobPosting->interview_type) }}
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-sm text-gray-500">{{ __('frontend.expires_in') }}</h4>
                                        <p class="font-medium">{{ $invite->expires_at->format('M d-Y h:i A') }}</p>
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
        
        <!-- Application Wizard Section -->
        <section id="application-wizard" class="hidden animate-scale-in">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-primary text-white p-6">
                    <h2 class="text-2xl font-bold">{{ __('frontend.application_form') }}</h2>
                    <p class="text-white/80">
                        {{ __('frontend.application_form_description') }}
                    </p>
                </div>
                
                <!-- Progress Steps -->
                <div class="px-6 pt-6">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center flex-1">
                            <div id="step-1" class="step-active flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 font-medium">1</div>
                            <div class="step-line" id="line-1"></div>
                            <div id="step-2" class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 font-medium">2</div>
                            <div class="step-line" id="line-2"></div>
                            <div id="step-3" class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 font-medium">3</div>
                            <div class="step-line" id="line-3"></div>
                            <div id="step-4" class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 font-medium">4</div>
                            <div class="step-line" id="line-4"></div>
                            <div id="step-5" class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 font-medium">5</div>
                        </div>
                    </div>
                    
                    <div class="flex justify-between text-sm text-gray-600 mb-6 px-1">
                        <div class="text-center w-20 {{ app()->getLocale() == 'ar' ? 'mr-0' : 'ml-0' }}">{{ __('frontend.accept_terms') }}</div>
                        <div class="text-center w-20 {{ app()->getLocale() == 'ar' ? 'mr-0' : 'ml-0' }}">{{ __('frontend.accept_budget') }}</div>
                        <div class="text-center w-20 {{ app()->getLocale() == 'ar' ? 'mr-0' : 'ml-0' }}">{{ __('frontend.personal_information') }}</div>
                        <div class="text-center w-20 {{ app()->getLocale() == 'ar' ? 'mr-5' : 'ml-5' }}">{{ __('frontend.questions') }}</div>
                        <div class="text-center w-20 {{ app()->getLocale() == 'ar' ? 'mr-5' : 'ml-5' }}">{{ __('frontend.upload_cv') }}</div>
                    </div>
                </div>
                
                <!-- Form Steps -->
                <form id="application-form" class="p-6">
                    <!-- Step 1: Accept Terms and Select Interview Date -->
                    <div id="step-1-content" class="step-content">
                        <h3 class="text-xl font-semibold mb-6">{{ __('frontend.accept_terms') }}</h3>
                        
                        <div class="border border-gray-200 rounded-lg p-6 mb-6 bg-gray-50">
                            <div class="terms-content mb-6">
                                {!! $invite->jobPosting->terms !!}
                            </div>
                            
                            <div class="flex items-start">
                                <input type="checkbox" id="accept-terms" name="accept-terms" required class="h-4 w-4 mt-1 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="accept-terms" class="{{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }} block text-sm text-gray-700">
                                    {{ __('frontend.i_accept_terms') }}
                                </label>
                            </div>
                        </div>
                        
                        <!-- Interview Date Selection -->
                        <div class="mt-8">
                            <h3 class="text-xl font-semibold mb-4">{{ __('frontend.select_interview_date') }}</h3>
                            <p class="text-gray-600 mb-4">{{ __('frontend.please_select_interview_date') }}</p>
                            
                            <div class="border border-gray-200 rounded-lg p-6 bg-gray-50">
                                <div class="mb-4">
                                    <label for="interview-date" class="block text-sm font-medium text-gray-700 mb-2">{{ __('frontend.available_dates') }} *</label>
                                    <select id="interview-date" name="interview_date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                                        <option value="">{{ __('frontend.select_date') }}</option>
                                        @php
                                            $interviewDates = json_decode($invite->jobPosting->interview_dates, true);
                                        @endphp
                                        
                                        @if(is_array($interviewDates) && count($interviewDates) > 0)
                                            @foreach($interviewDates as $date)
                                                <option value="{{ $date }}">
                                                    @php
                                                        $dateTime = new DateTime($date);
                                                        echo $dateTime->format('l, F j, Y - g:i A');
                                                    @endphp
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                
                                <!-- Time slot selection if needed -->
                                <div id="time-slot-container" class="hidden">
                                    <label for="time-slot" class="block text-sm font-medium text-gray-700 mb-2">{{ __('frontend.select_time_slot') }} *</label>
                                    <div id="time-slots" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                                        <!-- Time slots will be populated dynamically if needed -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="step-2-content" class="step-content hidden">
                        <h3 class="text-xl font-semibold mb-1">{{ __('frontend.accept_budget') }}</h3>
                        <span for="budget" class="block text-sm font-medium text-gray-700 mb-2">{{ __('frontend.budget_note') }}</span>
                        
                        <div class="border border-gray-200 rounded-lg p-6 mb-6 bg-gray-50">
                            <div class="mb-4">
                                <h4 class="text-2xl text-center mb-2 step-active">{{ number_format($invite->jobPosting->salary, 2) }} EGP</h4>
                            </div>
                            
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="accept-budget" name="accept-budget" required class="h-4 w-4 mt-1 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="accept-budget" class="{{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }} block text-sm text-gray-700">
                                {{ __('frontend.i_accept_budget') }}
                            </label>
                        </div>
                    </div>

                    <!-- Step 3: Personal Information -->
                    <div id="step-3-content" class="step-content hidden">
                        <h3 class="text-xl font-semibold mb-6">{{ __('frontend.personal_information') }}</h3>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">{{ __('frontend.name') }} *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">{{ __('frontend.email') }} *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary" value="{{ $invite->email }}" disabled>
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">{{ __('frontend.mobile') }} *</label>
                                <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2: Questions -->
                    <div id="step-4-content" class="step-content hidden">
                        <h3 class="text-xl font-semibold mb-6">{{ __('frontend.questions') }}</h3>
                        
                        <div class="space-y-6">
                            @foreach ($invite->jobPosting->questions as $index => $question)
                                <div class="question-item">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">{{ $question->question }} *</label>
                                    
                                    @if($question->type == 'text')
                                        <input 
                                            type="text" 
                                            id="question-{{ $index }}" 
                                            name="question[{{ $question->id }}]" 
                                            required 
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                                        >
                                    @else
                                        <textarea 
                                            id="question-{{ $index }}" 
                                            name="question[{{ $question->id }}]" 
                                            rows="3" 
                                            required 
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                                        ></textarea>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Step 3: Upload CV -->
                    <div id="step-5-content" class="step-content hidden">
                        <h3 class="text-xl font-semibold mb-6">{{ __('frontend.upload_cv') }}</h3>
                        
                        <div class="mb-6">
                            <div class="file-upload-container">
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-primary transition-colors">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                                    <p class="text-gray-700 mb-1">{{ __('frontend.drag_drop_resume') }}</p>
                                    <button type="button" class="text-primary font-medium">{{ __('frontend.browse_files') }}</button>
                                    <p class="text-sm text-gray-500 mt-2">{{ __('frontend.supported_formats') }}</p>
                                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                                </div>
                                <div id="file-name" class="mt-3 text-sm hidden"></div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <div class="flex items-start">
                                <input type="checkbox" id="terms" name="terms" required class="h-4 w-4 mt-1 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="terms" class="{{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }} block text-sm text-gray-700">
                                    {{ __('frontend.certify_information') }}
                                </label>
                            </div>
                        </div>
                    </div>


                    
                    <!-- Navigation Buttons -->
                    <div class="flex justify-between mt-8">
                        <button type="button" id="prev-btn" class="hidden px-6 py-2 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors">
                            <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} {{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }}"></i>
                            {{ __('frontend.previous') }}
                        </button>
                        
                        <button type="button" id="next-btn" class="{{ app()->getLocale() == 'ar' ? 'mr-auto' : 'ml-auto' }} px-6 py-2 bg-primary hover:bg-red-800 text-white font-medium rounded-lg transition-colors">
                            {{ __('frontend.next') }}
                            <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} {{ app()->getLocale() == 'ar' ? 'ml-2' : 'mr-2' }}"></i>
                        </button>
                        
                        <button type="submit" id="submit-btn" class="hidden {{ app()->getLocale() == 'ar' ? 'mr-auto' : 'ml-auto' }} px-6 py-2 bg-primary hover:bg-red-800 text-white font-medium rounded-lg transition-colors">
                            {{ __('frontend.submit_application') }}
                            <i class="fas fa-paper-plane {{ app()->getLocale() == 'ar' ? 'mr-2' : 'ml-2' }}"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>
        
        <!-- Success Message Section -->
        <section id="success-message" class="hidden animate-scale-in">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-8 text-center">
                <div class="mb-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-check-circle text-4xl text-green-500"></i>
                    </div>
                    <h2 class="text-2xl font-bold mb-2">{{ __('frontend.application_submitted') }}</h2>
                    <p class="text-gray-600 mb-6">{{ __('frontend.thanks_for_your_application') }}</p>                    
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.main>
    
    <style>
        /* Custom styles */
        .step-active {
            color: #213B75;
            border-color: #213B75;
        }
        
        .step-completed {
            background-color: #213B75;
            color: white;
            border-color: #213B75;
        }
        
        .step-line {
            height: 2px;
            background-color: #d1d5db;
            flex: 1;
            margin: 0 8px;
            transition: background-color 0.3s ease;
        }
        
        .step-line-active {
            background-color: #213B75;
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
            border-color: #213B75;
            background-color: rgba(179, 32, 37, 0.05);
        }
        
        .time-slot.selected {
            background-color: #213B75;
            color: white;
            border-color: #213B75;
        }
        
        .time-slot.disabled {
            opacity: 0.5;
            cursor: not-allowed;
            background-color: #f3f4f6;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Variables
            const applyNowBtn = document.getElementById('apply-now-btn');
            const applicationWizard = document.getElementById('application-wizard');
            const jobDetailsSection = document.querySelector('section:first-of-type');
            const successMessage = document.getElementById('success-message');
            
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const submitBtn = document.getElementById('submit-btn');
            
            const steps = [
                document.getElementById('step-1'),
                document.getElementById('step-2'),
                document.getElementById('step-3'),
                document.getElementById('step-4'),
                document.getElementById('step-5')
            ];
            
            const stepLines = [
                document.getElementById('line-1'),
                document.getElementById('line-2'),
                document.getElementById('line-3'),
                document.getElementById('line-4')
            ];
            
            const stepContents = [
                document.getElementById('step-1-content'),
                document.getElementById('step-2-content'),
                document.getElementById('step-3-content'),
                document.getElementById('step-4-content'),
                document.getElementById('step-5-content')
            ];
            
            let currentStep = 0;
            
            // Show application wizard
            applyNowBtn.addEventListener('click', function() {
                jobDetailsSection.classList.add('hidden');
                applicationWizard.classList.remove('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            
            // Handle file upload
            const resumeInput = document.getElementById('resume');
            const fileNameDisplay = document.getElementById('file-name');
            
            resumeInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const fileName = this.files[0].name;
                    fileNameDisplay.textContent = `Selected file: ${fileName}`;
                    fileNameDisplay.classList.remove('hidden');
                }
            });
            
            // Handle interview date selection
            const interviewDateSelect = document.getElementById('interview-date');
            
            interviewDateSelect.addEventListener('change', function() {
                // You can add additional logic here if needed
                // For example, if you need to show time slots based on the selected date
                
                // Clear any previous validation styling
                this.classList.remove('border-red-500');
            });
            
            // Navigation functions
            function updateStep(step) {
                // Hide all step contents
                stepContents.forEach(content => content.classList.add('hidden'));
                
                // Show current step content
                stepContents[step].classList.remove('hidden');
                
                // Update step indicators
                steps.forEach((stepEl, index) => {
                    if (index < step) {
                        stepEl.classList.remove('step-active');
                        stepEl.classList.add('step-completed');
                    } else if (index === step) {
                        stepEl.classList.add('step-active');
                        stepEl.classList.remove('step-completed');
                    } else {
                        stepEl.classList.remove('step-active', 'step-completed');
                    }
                });
                
                // Update step lines
                stepLines.forEach((line, index) => {
                    if (index < step) {
                        line.classList.add('step-line-active');
                    } else {
                        line.classList.remove('step-line-active');
                    }
                });
                
                // Update buttons
                if (step === 0) {
                    prevBtn.classList.add('hidden');
                } else {
                    prevBtn.classList.remove('hidden');
                }
                
                if (step === steps.length - 1) {
                    nextBtn.classList.add('hidden');
                    submitBtn.classList.remove('hidden');
                } else {
                    nextBtn.classList.remove('hidden');
                    submitBtn.classList.add('hidden');
                }
            }
            
            // Validate current step
            function validateStep(step) {
                const stepContent = stepContents[step];
                const requiredFields = stepContent.querySelectorAll('[required]');
                
                let isValid = true;
                
                requiredFields.forEach(field => {
                    // For checkboxes, check if they're checked
                    if (field.type === 'checkbox') {
                        if (!field.checked) {
                            field.classList.add('border-red-500');
                            isValid = false;
                        } else {
                            field.classList.remove('border-red-500');
                        }
                    } else {
                        // For other input types
                        if (!field.value.trim()) {
                            field.classList.add('border-red-500');
                            isValid = false;
                        } else {
                            field.classList.remove('border-red-500');
                        }
                    }
                });
                
                return isValid;
            }
            
            // Event listeners for navigation
            nextBtn.addEventListener('click', function() {
                if (validateStep(currentStep)) {
                    currentStep++;
                    updateStep(currentStep);
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                } else {
                    // Check if we're on the first step with accept-terms checkbox and interview date
                    if (currentStep === 0) {
                        const acceptTermsCheckbox = document.getElementById('accept-terms');
                        const interviewDateSelect = document.getElementById('interview-date');
                        
                        let errorMessage = '';
                        
                        if (!acceptTermsCheckbox.checked) {
                            errorMessage += '- Please accept the terms and conditions\n';
                        }
                        
                        if (!interviewDateSelect.value) {
                            errorMessage += '- Please select an interview date\n';
                        }
                        
                        if (errorMessage) {
                            alert('Please complete the following:\n' + errorMessage);
                        } else {
                            alert('Please fill in all required fields before proceeding.');
                        }
                    } else {
                        alert('Please fill in all required fields before proceeding.');
                    }
                }
            });
            
            prevBtn.addEventListener('click', function() {
                currentStep--;
                updateStep(currentStep);
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            
            // Form submission
            const applicationForm = document.getElementById('application-form');
            
            applicationForm.addEventListener('submit', function(e) {
                e.preventDefault();

                if (validateStep(currentStep)) {
                    const loadingScreen = document.createElement('div');
                    loadingScreen.id = 'loading-screen';
                    loadingScreen.style.position = 'fixed';
                    loadingScreen.style.top = '0';
                    loadingScreen.style.left = '0';
                    loadingScreen.style.width = '100%';
                    loadingScreen.style.height = '100%';
                    loadingScreen.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
                    loadingScreen.style.display = 'flex';
                    loadingScreen.style.alignItems = 'center';
                    loadingScreen.style.justifyContent = 'center';
                    loadingScreen.style.zIndex = '9999';
                    loadingScreen.innerHTML = '<div class="loader"></div>';
                    document.body.appendChild(loadingScreen);

                    if (!document.getElementById('loader-styles')) {
                        const loaderStyle = document.createElement('style');
                        loaderStyle.id = 'loader-styles';
                        loaderStyle.innerHTML = `
                            .loader {
                                border: 8px solid #f3f3f3;
                                border-top: 8px solid #213B75;
                                border-radius: 50%;
                                width: 50px;
                                height: 50px;
                                animation: spin 1s linear infinite;
                            }
                            @keyframes spin {
                                0% { transform: rotate(0deg); }
                                100% { transform: rotate(360deg); }
                            }
                        `;
                        document.head.appendChild(loaderStyle);
                    }

                    const formData = new FormData(applicationForm);
                    fetch('{{ route("invite.store" , $invite->token) }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);

                        document.body.removeChild(loadingScreen);

                        applicationWizard.classList.add('hidden');
                        successMessage.classList.remove('hidden');
                        window.scrollTo({ top: 0, behavior: 'smooth' });

                        setTimeout(() => {
                            window.location.href = '{{ route("home") }}';
                        }, 4000);
                    })
                    .catch(error => {
                        console.error(error);

                        document.body.removeChild(loadingScreen);

                        alert('An error occurred while submitting your application. Please try again.');

                    });
                } else {
                    alert('Please fill in all required fields before submitting.');
                }
            });

            
            // File upload styling - Make the whole container clickable
            const fileUploadContainer = document.querySelector('.file-upload-container .border-dashed');
            const browseButton = fileUploadContainer.querySelector('button');
            
            fileUploadContainer.addEventListener('click', function(e) {
                if (e.target !== resumeInput) {
                    resumeInput.click();
                }
            });
            
            browseButton.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent any default button behavior
                resumeInput.click();
            });
            
            // Add drag and drop functionality for file upload
            fileUploadContainer.addEventListener('dragover', function(e) {
                e.preventDefault();
                fileUploadContainer.classList.add('border-primary');
            });
            
            fileUploadContainer.addEventListener('dragleave', function() {
                fileUploadContainer.classList.remove('border-primary');
            });
            
            fileUploadContainer.addEventListener('drop', function(e) {
                e.preventDefault();
                fileUploadContainer.classList.remove('border-primary');
                
                if (e.dataTransfer.files.length) {
                    resumeInput.files = e.dataTransfer.files;
                    
                    // Trigger change event
                    const event = new Event('change', { bubbles: true });
                    resumeInput.dispatchEvent(event);
                }
            });
            
            // Initialize the first step
            updateStep(currentStep);
        });
    </script>