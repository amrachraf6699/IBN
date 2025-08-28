<?php

namespace App\Http\Requests\Manage\Projects;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectsRequest extends FormRequest
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
        $rules =  [
            'title.ar' => ['required', 'string', 'max:255'],
            'title.en' => ['required', 'string', 'max:255'],

            'description.ar' => ['nullable', 'string'],
            'description.en' => ['nullable', 'string'],

            'url' => ['nullable', 'string', 'url'],
        ];

        if ($this->isMethod('post')) {
            $rules['image'] = ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'];
        } else {
            $rules['image'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'];
        }

        return $rules;
    }

    public function attributes(): array
    {
        return [
            'title.ar' => __('dashboard.title'),
            'title.en' => __('dashboard.title'),
            'description.ar' => __('dashboard.description'),
            'description.en' => __('dashboard.description'),
            'url' => __('dashboard.url'),
            'image' => __('dashboard.image'),
        ];
    }

}
