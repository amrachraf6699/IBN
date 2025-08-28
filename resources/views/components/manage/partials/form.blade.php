@props([
    'action',
    'method' => 'POST',
    'fields' => [],
    'model' => null,
])


<form action="{{ $action }}" method="{{ strtolower($method) === 'get' ? 'get' : 'post' }}" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if(in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    @foreach($fields as $name => $field)
        <div>
            <label class="block mb-1 font-medium">{{ $field['label'] }}</label>
            
            {{-- Translatable Fields --}}
            @if(!empty($field['translatable']))
            <div class="row">
                @foreach(['ar' => 'عربي', 'en' => 'English'] as $locale => $label)
                <div class="w-full md:w-1/2 px-2 mb-2">
                    <label class="block text-sm mb-1">{{ $label }}</label>
                    @if($field['type'] === 'text')
                    <input type="text" name="{{ $name }}[{{ $locale }}]"
                        value="{{ old($name . '.' . $locale, $model?->getTranslation($name, $locale)) }}"
                        class="w-full border rounded px-3 py-2">
                    @elseif($field['type'] === 'textarea' || $field['type'] === 'ckeditor')
                    <textarea name="{{ $name }}[{{ $locale }}]"
                        class="{{ $field['type'] === 'ckeditor' ? 'ckeditor' : '' }} w-full border rounded px-3 py-2">{{ old($name . '.' . $locale, $model?->getTranslation($name, $locale)) }}</textarea>
                    @elseif($field['type'] === 'image')
                    @if($model && $model->getTranslation($name, $locale))
                    <img src="{{ asset($model->getTranslation($name, $locale)) }}" alt=""
                        class="w-32 h-32 object-cover rounded mb-2">
                    @endif
                    <input type="file" name="{{ $name }}[{{ $locale }}]" class="w-full border rounded px-3 py-2">
                    @elseif($field['type'] === 'select')
                    <select name="{{ $name }}[{{ $locale }}]" class="w-full border rounded px-3 py-2">
                        @foreach($field['options'] as $optionValue => $optionLabel)
                        <option value="{{ $optionValue }}" {{ old($name . '.' . $locale, $model?->getTranslation($name, $locale)) ==
                            $optionValue ? 'selected' : '' }}>{{ $optionLabel }}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
                @endforeach
            </div>
            {{-- Normal Fields --}}
            @else
                @switch($field['type'])
                    @case('text')
                        <input type="text" name="{{ $name }}" value="{{ $name === 'password' ? '' : old($name, $model?->$name) }}" class="w-full border rounded px-3 py-2">
                        @break

                    @case('textarea')
                        <textarea name="{{ $name }}" class="w-full border rounded px-3 py-2">{{ old($name, $model?->$name) }}</textarea>
                        @break

                    @case('ckeditor')
                        <textarea name="{{ $name }}" class="ckeditor w-full border rounded px-3 py-2">{{ old($name, $model?->$name) }}</textarea>
                        @break

                    @case('image')
                        @if($model?->$name)
                            <img src="{{ asset($model->$name) }}" alt="" class="w-32 h-32 object-cover rounded mb-2">
                        @endif
                        <input type="file" name="{{ $name }}" class="w-full border rounded px-3 py-2">
                        @break
                    @case('select')
                        <select name="{{ $name }}" class="w-full border rounded px-3 py-2">
                            @foreach($field['options'] as $optionValue => $optionLabel)
                                <option value="{{ $optionValue }}" {{ old($name, $model?->$name) == $optionValue ? 'selected' : '' }}>{{ $optionLabel }}</option>
                            @endforeach
                        </select>
                        @break
                @endswitch
            @endif

            @error($name)
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    @endforeach

    <div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('dashboard.save') }}</button>
    </div>
</form>
