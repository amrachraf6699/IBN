<!-- Interview Dates Modal -->
<div id="interviewDatesModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 overflow-y-auto py-10">
    <div class="bg-white p-6 rounded-lg shadow-xl max-w-md w-full mx-auto my-auto">
        <div class="flex justify-between items-center mb-4 sticky top-0 bg-white">
            <h2 class="text-xl font-bold text-gray-800">Manage Interview Dates</h2>
            <button type="button" class="text-gray-400 hover:text-gray-500" onclick="closeModal('interviewDatesModal')">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <div class="mb-4">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-medium text-gray-700">Current Dates (<span id="dateCount">0</span>)</span>
                <button type="button" class="text-sm text-blue-600 hover:text-blue-800" id="toggleAllDates">
                    Expand All
                </button>
            </div>
            
            <div id="interviewDatesContainer" class="space-y-3 max-h-60 overflow-y-auto mb-4 p-2 border border-gray-200 rounded-md">
                <!-- Interview dates will be added here dynamically -->
            </div>
        </div>
        
        <div class="space-y-4 sticky bottom-0 bg-white pt-2">
            <button type="button" class="w-full inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="addInterviewDate()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add New Date
            </button>
            
            <div class="flex justify-end space-x-3">
                <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="closeModal('interviewDatesModal')">
                    Cancel
                </button>
                <button type="button" class="inline-flex justify-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" onclick="saveInterviewDates()">
                    Save Dates
                </button>
            </div>
        </div>
    </div>
</div>