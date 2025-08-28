<script>// Modal management
function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Prevent scrolling behind modal
}

function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
    document.body.style.overflow = ''; // Re-enable scrolling
}

// Interview Dates Logic
function addInterviewDate(value = '') {
    const container = document.getElementById('interviewDatesContainer');
    const dateGroup = document.createElement('div');
    dateGroup.className = 'flex items-center space-x-2 bg-gray-50 p-2 rounded border';
    
    // Create date input
    const input = document.createElement('input');
    input.type = 'date';
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
    const inputs = document.querySelectorAll('#interviewDatesContainer input[type="date"]');
    const dates = Array.from(inputs).map(input => input.value).filter(val => val);
    document.getElementById('interviewDatesInput').value = JSON.stringify(dates);
    
    // Add a notification
    const notification = document.createElement('div');
    notification.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-lg z-50';
    notification.textContent = `${dates.length} interview date${dates.length !== 1 ? 's' : ''} saved!`;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
    
    closeModal('interviewDatesModal');
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
                ${data.en ? truncateText(data.en, 40) : 'New Question'}
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
                    <label class="block text-sm font-medium text-gray-700 mb-1">Question Type</label>
                    <select class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 question-type" onchange="updateQuestionLabel('${questionId}', this)">
                        <option value="text" ${data.type === 'text' ? 'selected' : ''}>Text</option>
                        <option value="textarea" ${data.type === 'textarea' ? 'selected' : ''}>Textarea</option>
                        <option value="radio" ${data.type === 'radio' ? 'selected' : ''}>Radio</option>
                    </select>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Question (Arabic)</label>
                    <input type="text" placeholder="Enter question in Arabic" value="${data.ar}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 question-ar">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Question (English)</label>
                    <input type="text" placeholder="Enter question in English" value="${data.en}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 question-en" onchange="updateQuestionTitle('${questionId}', this)">
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
    title.textContent = input.value ? truncateText(input.value, 40) : 'New Question';
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
    
    // Add a notification
    const notification = document.createElement('div');
    notification.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-lg z-50';
    notification.textContent = `${questions.length} question${questions.length !== 1 ? 's' : ''} saved!`;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
    
    closeModal('questionsModal');
}

// Form validation functions
function validateForm() {
    let isValid = true;
    const requiredFields = document.querySelectorAll('form [required]');
    
    // Reset previous validation errors
    document.querySelectorAll('.validation-error').forEach(el => el.remove());
    document.querySelectorAll('.border-red-500').forEach(el => {
        el.classList.remove('border-red-500');
        el.classList.add('border-gray-300');
    });
    
    // Check each required field
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
    
    // Validate special fields
    const interviewDatesInput = document.getElementById('interviewDatesInput');
    if (interviewDatesInput) {
        try {
            const dates = JSON.parse(interviewDatesInput.value || '[]');
            if (!dates.length) {
                isValid = false;
                
                // Add error notification
                const notification = document.createElement('div');
                notification.className = 'fixed bottom-4 right-4 bg-red-500 text-white px-4 py-2 rounded shadow-lg z-50';
                notification.textContent = 'Please add at least one interview date';
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            }
        } catch (e) {
            console.error('Error parsing interview dates:', e);
            isValid = false;
        }
    }
    
    return isValid;
}

// Initialize modals on page load
document.addEventListener('DOMContentLoaded', function() {
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
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (!validateForm()) {
                e.preventDefault();
                
                // Scroll to first error
                const firstError = document.querySelector('.border-red-500');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }
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
    
    // Initialize tooltips
    const tooltips = document.querySelectorAll('[data-tooltip]');
    tooltips.forEach(tooltip => {
        tooltip.addEventListener('mouseenter', function() {
            const text = this.getAttribute('data-tooltip');
            const tooltipEl = document.createElement('div');
            tooltipEl.className = 'absolute z-10 bg-gray-800 text-white text-xs rounded py-1 px-2 -mt-8';
            tooltipEl.textContent = text;
            this.appendChild(tooltipEl);
        });
        
        tooltip.addEventListener('mouseleave', function() {
            const tooltipEl = this.querySelector('.absolute');
            if (tooltipEl) tooltipEl.remove();
        });
    });
});
</script>