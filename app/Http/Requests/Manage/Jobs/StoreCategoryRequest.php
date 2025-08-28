<?php

namespace App\Http\Requests\Manage\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'title.ar' => ['required', 'string', 'max:255'],
            'title.en' => ['required', 'string', 'max:255'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title.ar' => __('dashboard.title'),
            'title.en' => __('dashboard.title'),
        ];
    }
}
