<x-manage.layouts.main :title="$application->jobPosting->title . ' - ' . __('dashboard.application_details')">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-medium">{{ __('dashboard.application_details') }}</h2>
        <div class="flex space-x-3">
            <a href="{{ route('manage.jobs.show', $application->jobPosting) }}" class="btn btn-secondary">
                {{ __('dashboard.back_to_job') }}
            </a>
        </div>
    </div>

    <!-- Application Status Card -->
    <div class="card mb-6">
        <header class="card-header noborder flex items-center justify-between">
            <h4 class="card-title">{{ __('dashboard.status') }}</h4>
            <span class="inline-block px-3 py-1 rounded-full text-center {{ 
                $application->status == 'accepted' ? 'bg-success-500 text-white' : 
                ($application->status == 'pending' ? 'bg-warning-500 text-white' : 'bg-danger-500 text-white') 
            }}">
                {{ ucfirst($application->status) }}
            </span>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <h5 class="font-semibold mb-2">#</h5>
                    <p class="text-slate-600 dark:text-slate-300">#{{ $application->id }}</p>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.applied_at') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{{ $application->created_at->format('Y-m-d H:i') }}</p>
                    <p class="text-sm text-slate-500">{{ $application->created_at->diffForHumans() }}</p>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.last_updated') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{{ $application->updated_at->format('Y-m-d H:i') }}</p>
                    <p class="text-sm text-slate-500">{{ $application->updated_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Applicant Information -->
    <div class="card mb-6">
        <header class="card-header noborder">
            <h4 class="card-title">{{ __('dashboard.applicant_information') }}</h4>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.name') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{{ $application->name }}</p>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.email') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{{ $application->email }}</p>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.phone') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{{ $application->phone }}</p>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.interview_date') }}</h5>
                    @if ($application->interview_date)
                        <p class="text-slate-600 dark:text-slate-300">
                            {{ $application->interview_date->format('Y-m-d H:i') }}
                        </p>
                    @else
                        <p class="text-slate-500">{{ __('dashboard.no_interview_date') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Job Information -->
    <div class="card mb-6">
        <header class="card-header noborder">
            <h4 class="card-title">{{ __('dashboard.job_information') }}</h4>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.job_title') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{{ $application->jobPosting->title }}</p>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.salary') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{{ number_format($application->jobPosting->salary, 2) }} EGP</p>
                </div>
                <div class="md:col-span-2">
                    <h5 class="font-semibold mb-2">{{ __('dashboard.description') }}</h5>
                    <div class="text-slate-600 dark:text-slate-300 prose dark:prose-invert max-w-none">
                        {!! $application->jobPosting->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Questions & Answers -->
    <div class="card mb-6">
        <header class="card-header noborder">
            <h4 class="card-title">{{ __('dashboard.questions_and_answers') }}</h4>
        </header>
        <div class="card-body px-6 pb-6">
            @if($application->questions->count() > 0)
                <div class="space-y-6">
                    @foreach($application->questions as $answer)
                        <div class="border-b border-slate-200 dark:border-slate-700 pb-4 last:border-0 last:pb-0">
                            <h5 class="font-semibold mb-2">{{ $answer->question->question }}</h5>
                            <p class="text-slate-600 dark:text-slate-300">{{ $answer->answer }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-slate-500">{{ __('dashboard.no_questions_answered') }}</p>
            @endif
        </div>
    </div>

    <!-- Resume/CV -->
    <div class="card mb-6">
        <header class="card-header noborder">
            <h4 class="card-title">{{ __('dashboard.resume') }}</h4>
        </header>
        <div class="card-body px-6 pb-6">
            @if($application->cv)
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">{{ __('dashboard.resume_file') }}</p>
                        </div>
                    </div>
                    <a href="{{ asset($application->cv) }}" target="_blank" class="btn btn-primary btn-sm">
                        {{ __('dashboard.view_resume') }}
                    </a>
                </div>
            @else
                <p class="text-slate-500">{{ __('dashboard.no_resume_uploaded') }}</p>
            @endif
        </div>
    </div>

    <!-- Actions -->
    <div class="card">
        <header class="card-header noborder">
            <h4 class="card-title">{{ __('dashboard.actions') }}</h4>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="flex flex-wrap gap-3">
                @php
                    $showNextStepButton = in_array($application->status, ['pending', 'interview_scheduled']);
                    $nextStatus = $application->status == 'pending' ? 'interview_scheduled' : 
                                ($application->status == 'interview_scheduled' ? 'interview_made' : '');
                    
                    $nextStepLabel = $application->status == 'pending' ? __('dashboard.schedule_interview') : 
                                    ($application->status == 'interview_scheduled' ? __('dashboard.mark_interview_made') : '');
                @endphp
                
                @if($showNextStepButton)
                    <form action="{{ route('manage.application.update-status', $application) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="status" value="{{ $nextStatus }}">
                        <button type="submit" class="btn btn-primary">
                            {{ __('dashboard.move_to_next_step') }} ({{ $nextStepLabel }})
                        </button>
                    </form>
                @endif
                
                <!-- Always show Accept/Reject buttons -->
                <form action="{{ route('manage.application.update-status', $application) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="status" value="accepted">
                    <button type="submit" class="btn btn-success">
                        {{ __('dashboard.accept_application') }}
                    </button>
                </form>
                
                <form action="{{ route('manage.application.update-status', $application) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="status" value="rejected">
                    <button type="submit" class="btn btn-danger">
                        {{ __('dashboard.reject_application') }}
                    </button>
                </form>
                
                <form action="{{ route('manage.application.update-status', $application) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="status" value="considered">
                    <button type="submit" class="btn btn-warning">
                        {{ __('dashboard.consider_application') }}
                    </button>
                </form>

                @if($application->status == 'pending')
                <button type="button" class="btn btn-info" data-modal-target="#scheduleModal">
                    {{ __('dashboard.schedule_interview_date') }}
                </button>
                @endif
                
                
                <form action="{{ route('manage.application.delete', $application) }}" method="POST" class="inline" onsubmit="return confirm('{{ __('dashboard.confirm_delete') }}');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                        {{ __('dashboard.delete') }}
                    </button>
                </form>

                <div class="ml-auto flex items-center">
                    <a href="https://wa.me/+2{{ $application->phone }}" target="_blank" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-green-500 hover:bg-primary-500 transition text-white" title="WhatsApp">
                        <span class="sr-only">WhatsApp</span>
                        <iconify-icon icon="ic:baseline-whatsapp" width="24" height="24"></iconify-icon>
                    </a>
                    <a href="tel:{{ $application->phone }}" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-primary-500 hover:bg-green-500 transition text-white mr-1 ml-1" title="Call">
                        <span class="sr-only">Call</span>
                        <iconify-icon icon="ic:baseline-call" width="24" height="24"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div id="scheduleModal" class="modal hidden">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scheduleModalLabel">{{ __('dashboard.schedule_interview_date') }}</h5>
                    <button type="button" class="btn-close">
                        <iconify-icon icon="heroicons-outline:x"></iconify-icon>
                    </button>
                </div>
                <form action="{{ route('manage.application.set-time', $application) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-4">
                            <input type="datetime-local" id="interview_date" name="interview_date" class="form-control" required>
                            <div class="text-xs text-slate-500 mt-1">
                                {{ __('dashboard.choose_date_time_for_interview') }}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">
                            {{ __('dashboard.cancel') }}
                        </button>
                        <button type="submit" class="btn btn-primary">
                            {{ __('dashboard.save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-manage.layouts.main>
<script>
    // Get modal elements
    const scheduleModal = document.getElementById('scheduleModal');
    const scheduleModalBtn = document.querySelector('[data-modal-target="#scheduleModal"]');
    const closeModalBtn = scheduleModal.querySelector('.btn-close');
    const cancelBtn = scheduleModal.querySelector('.btn-secondary');
    const modalOverlay = scheduleModal.querySelector('.modal-overlay');

    // Function to open modal
    function openModal() {
    scheduleModal.classList.remove('hidden');
    scheduleModal.classList.add('show');
    document.body.classList.add('modal-open');
    
    // Add animation classes
    setTimeout(() => {
        scheduleModal.querySelector('.modal-dialog').classList.add('modal-show');
    }, 10);
    }

    // Function to close modal
    function closeModal() {
    scheduleModal.querySelector('.modal-dialog').classList.remove('modal-show');
    
    // Delay the hiding to allow for animation
    setTimeout(() => {
        scheduleModal.classList.remove('show');
        scheduleModal.classList.add('hidden');
        document.body.classList.remove('modal-open');
    }, 200);
    }

    // Event listeners
    if (scheduleModalBtn) {
    scheduleModalBtn.addEventListener('click', openModal);
    }

    if (closeModalBtn) {
    closeModalBtn.addEventListener('click', closeModal);
    }

    if (cancelBtn) {
    cancelBtn.addEventListener('click', closeModal);
    }

    // Close modal when clicking outside
    scheduleModal.addEventListener('click', function(event) {
    if (event.target === scheduleModal) {
        closeModal();
    }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && scheduleModal.classList.contains('show')) {
        closeModal();
    }
    });

    // Initialize the modal in hidden state on page load
    document.addEventListener('DOMContentLoaded', function() {
    scheduleModal.classList.add('hidden');
    
    // Update the button attribute for vanilla JS implementation
    if (scheduleModalBtn) {
        scheduleModalBtn.removeAttribute('data-bs-toggle');
        scheduleModalBtn.removeAttribute('data-bs-target');
        scheduleModalBtn.setAttribute('data-modal-target', '#scheduleModal');
    }
    });
</script>
<style>
    .modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1050;
    opacity: 0;
    transition: opacity 0.2s ease;
    pointer-events: none;
    }

    .modal.show {
    opacity: 1;
    pointer-events: all;
    }

    .modal.hidden {
    display: none;
    }

    .modal-dialog {
    width: 100%;
    max-width: 500px;
    background-color: #fff;
    border-radius: 0.375rem;
    transform: translateY(-20px);
    transition: transform 0.2s ease;
    }

    .dark .modal-dialog {
    background-color: #1e293b; /* slate-800 */
    color: #e2e8f0; /* slate-200 */
    }

    .modal-show {
    transform: translateY(0);
    }

    .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    border-bottom: 1px solid #e2e8f0;
    }

    .dark .modal-header {
    border-color: #334155; /* slate-700 */
    }

    .modal-title {
    font-size: 1.125rem;
    font-weight: 500;
    }

    .btn-close {
    background: transparent;
    border: none;
    cursor: pointer;
    color: #64748b;
    width: 2rem;
    height: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9999px;
    transition: background-color 0.2s;
    }

    .btn-close:hover {
    background-color: #f1f5f9;
    }

    .dark .btn-close:hover {
    background-color: #334155; /* slate-700 */
    }

    .modal-body {
    padding: 1rem;
    }

    .modal-footer {
    padding: 1rem;
    display: flex;
    justify-content: flex-end;
    gap: 0.5rem;
    border-top: 1px solid #e2e8f0;
    }

    .dark .modal-footer {
    border-color: #334155; /* slate-700 */
    }

    body.modal-open {
    overflow: hidden;
    }
</style>