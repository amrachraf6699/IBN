@php
    $settings = settings();
@endphp

<form action="{{ route('manage.settings.updateGeneral') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        {{-- Site Name - Arabic --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.site_name') }} ({{ __('dashboard.arabic') }})</label>
            <input type="text" name="name[ar]" value="{{ old('name.ar', $settings->getTranslation('name', 'ar')) }}" class="w-full border rounded px-3 py-2 @error('name.ar') border-red-500 @enderror">
            @error('name.ar')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Site Name - English --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.site_name') }} ({{ __('dashboard.english') }})</label>
            <input type="text" name="name[en]" value="{{ old('name.en', $settings->getTranslation('name', 'en')) }}" class="w-full border rounded px-3 py-2 @error('name.en') border-red-500 @enderror">
            @error('name.en')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Description - Arabic --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.site_description') }} ({{ __('dashboard.arabic') }})</label>
            <textarea name="description[ar]" class="w-full border rounded px-3 py-2 @error('description.ar') border-red-500 @enderror">{{ old('description.ar', $settings->getTranslation('description', 'ar')) }}</textarea>
            @error('description.ar')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Description - English --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.site_description') }} ({{ __('dashboard.english') }})</label>
            <textarea name="description[en]" class="w-full border rounded px-3 py-2 @error('description.en') border-red-500 @enderror">{{ old('description.en', $settings->getTranslation('description', 'en')) }}</textarea>
            @error('description.en')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Keywords - Arabic --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.site_keywords') }} ({{ __('dashboard.arabic') }})</label>
            <input type="text" name="keywords[ar]" value="{{ old('keywords.ar', $settings->getTranslation('keywords', 'ar')) }}" class="w-full border rounded px-3 py-2 @error('keywords.ar') border-red-500 @enderror">
            @error('keywords.ar')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Keywords - English --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.site_keywords') }} ({{ __('dashboard.english') }})</label>
            <input type="text" name="keywords[en]" value="{{ old('keywords.en', $settings->getTranslation('keywords', 'en')) }}" class="w-full border rounded px-3 py-2 @error('keywords.en') border-red-500 @enderror">
            @error('keywords.en')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">{{ __('dashboard.save') }}</button>
</form>
