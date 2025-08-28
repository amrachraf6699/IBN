@php
    $settings = settings();
    $socialLinks = json_decode($settings->social_links, true) ?? [];
@endphp

<form action="{{ route('manage.settings.updateContact') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        {{-- Address AR --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.address') }} ({{ __('dashboard.arabic') }})</label>
            <textarea name="address[ar]" class="w-full border rounded px-3 py-2">{{ old('address.ar', $settings->getTranslation('address', 'ar')) }}</textarea>
        </div>

        {{-- Address EN --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.address') }} ({{ __('dashboard.english') }})</label>
            <textarea name="address[en]" class="w-full border rounded px-3 py-2">{{ old('address.en', $settings->getTranslation('address', 'en')) }}</textarea>
        </div>

        {{-- Phone --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.phone') }}</label>
            <input type="text" name="phone" value="{{ old('phone', $settings->phone) }}" class="w-full border rounded px-3 py-2">
        </div>

        {{-- Email --}}
        <div>
            <label class="block mb-1 font-medium">{{ __('dashboard.email') }}</label>
            <input type="email" name="email" value="{{ old('email', $settings->email) }}" class="w-full border rounded px-3 py-2">
        </div>

        {{-- Social Links --}}
        <div class="md:col-span-2">
            <label class="block mb-2 font-medium">{{ __('dashboard.social_links') }}</label>
            
            <div class="space-y-3">
                @foreach ($socialLinks as $platform => $url)
                    <div class="flex items-center gap-3">
                        {{-- Iconify Icon --}}
                        <iconify-icon icon="{{ $platform == 'location' ? 'mdi:google-maps' : 'logos:' . $platform }}" class="mr-0 md:mr-2 rtl:ml-2 text-lg"></iconify-icon>
                                                
                        {{-- URL Input --}}
                        <input type="text" name="social_links[{{ $platform }}]" value="{{ old("social_links.$platform", $url) }}" class="flex-1 border rounded px-3 py-2">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
        {{ __('dashboard.save') }}
    </button>
</form>
