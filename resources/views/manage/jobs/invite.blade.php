<x-manage.layouts.main title="{{ __('dashboard.send_invites') }}">
    <form action="{{ route('manage.jobs.sendInvites', $job) }}" method="POST" enctype="multipart/form-data" class="space-y-6 max-w-2xl mx-auto bg-white p-6 rounded shadow">
        @csrf
        
        <h1 class="text-2xl font-bold text-center">{{ __('dashboard.send_invites') }}</h1>
        
        <div class="text-sm text-gray-500 text-center">
            {{ __('dashboard.invite_description', ['job' => $job->title]) }}
        </div>
        
        @if($errors->any())
            <div class="bg-danger-100 border border-danger-400 text-danger px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline" style="color: #b00020;">
                    {{ $errors->first() }}
                </span>
            </div>
        @endif

        <div>
            <label for="emails" class="block text-sm font-medium text-gray-700">{{ __('dashboard.emails_comma_separated') }}</label>
            <textarea name="emails" id="emails" rows="4" class="mt-1 block w-full border rounded px-3 py-2" placeholder="mail@mail.com,mail2@mail.com,mail3@mail.com">{{ old('emails') }}</textarea>
        </div>

        <div class="relative my-6">
            <hr class="border-primary-300 p-2">
            <span class="absolute inset-0 flex justify-center text-sm text-gray-500 bg-white px-2">
                {{ __('dashboard.or') }}
            </span>
        </div>

        <div>
            <label for="file" class="block text-sm font-medium text-gray-700">{{ __('dashboard.upload_excel_file') }}</label>
            <input type="file" name="file" id="file" accept=".xlsx" class="mt-1 block w-full border rounded px-3 py-2">
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                {{ __('dashboard.send_invites') }}
            </button>
        </div>
    </form>
</x-manage.layouts.main>
