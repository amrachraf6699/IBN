<?php

namespace App\Http\Requests\Manage\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name.ar' => ['required', 'string', 'max:255'],
            'name.en' => ['required', 'string', 'max:255'],
            'description.ar' => ['nullable', 'string'],
            'description.en' => ['nullable', 'string'],
            'keywords.ar' => ['nullable', 'string', 'max:255'],
            'keywords.en' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name.ar' => __('dashboard.site_name') . ' (العربية)',
            'name.en' => __('dashboard.site_name') . ' (English)',
            'description.ar' => __('dashboard.site_description') . ' (العربية)',
            'description.en' => __('dashboard.site_description') . ' (English)',
            'keywords.ar' => __('dashboard.site_keywords') . ' (العربية)',
            'keywords.en' => __('dashboard.site_keywords') . ' (English)',
        ];
    }
}
