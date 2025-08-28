<?php

namespace App\Http\Requests\Manage\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralContactSettingsRequest extends FormRequest
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
            'statistics' => ['required', 'array'],
            'statistics.*.name.ar' => ['required', 'string', 'max:255'],
            'statistics.*.name.en' => ['required', 'string', 'max:255'],
            'statistics.*.value' => ['required', 'numeric', 'min:0'],
            'statistics.*.id' => ['nullable', 'integer', 'exists:statistics,id'],
        ];
    }
    
}
