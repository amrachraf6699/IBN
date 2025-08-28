<x-manage.layouts.main title="{{ __('dashboard.contact_messages') }}">
    <!-- Header Section with Breadcrumb -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">{{ __('dashboard.message_details') }}</h2>
            <p class="text-sm text-gray-500 mt-1">{{ $contact->created_at->format('F d, Y • H:i') }}</p>
        </div>
        <a href="{{ route('manage.contact.index') }}" class="flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 rtl:ml-2 rtl:mr-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            {{ __('dashboard.back_to_messages') }}
        </a>
    </div>

    <!-- Message Card -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden mb-8">
        <!-- Card Header -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-4 border-b">
            <div class="flex items-center">
                <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <div class="ml-4 rtl:mr-4 rtl:ml-0">
                    <h3 class="font-medium text-lg text-gray-800">{{ $contact->name }}</h3>
                    <p class="text-gray-600 text-sm">{{ $contact->email }}</p>
                </div>
            </div>
        </div>
        
        <!-- Message Content -->
        <div class="p-6">
            <div class="bg-gray-50 rounded-lg p-5 border border-gray-100">
                <p class="whitespace-pre-line text-gray-700">{{ $contact->message }}</p>
            </div>

            <!-- Message Info -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <p class="text-sm text-gray-500 mb-1">{{ __('dashboard.created_at') }}</p>
                    <p class="font-medium text-gray-800">{{ $contact->created_at->format('Y-m-d H:i:s') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Reply Section -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden">
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-4 border-b">
            <h3 class="text-lg font-medium text-gray-800">{{ __('dashboard.reply') }}</h3>
        </div>
        
        <div class="p-6">
            <form action="{{ route('manage.contact.reply', $contact->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <textarea 
                        name="reply" 
                        rows="5" 
                        class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-blue-500 transition-all outline-none" 
                        placeholder="{{ __('dashboard.type_your_reply') }}"
                    ></textarea>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-all duration-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 rtl:ml-2 rtl:mr-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        {{ __('dashboard.send_reply') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-manage.layouts.main>