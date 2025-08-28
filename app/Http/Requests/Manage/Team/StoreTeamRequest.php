<?php

namespace App\Http\Requests\Manage\Team;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
            'name.ar' => ['required', 'string', 'max:255'],
            'name.en' => ['required', 'string', 'max:255'],

            'description.ar' => ['nullable', 'string'],
            'description.en' => ['nullable', 'string'],

            'job_title.ar' => ['required', 'string'],
            'job_title.en' => ['required', 'string'],

            'facebook' => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
            'linkedin' => ['nullable', 'string'],
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
            'name.ar' => __('dashboard.name'),
            'name.en' => __('dashboard.name'),
            'description.ar' => __('dashboard.description'),
            'description.en' => __('dashboard.description'),
            'content.ar' => __('dashboard.content'),
            'content.en' => __('dashboard.content'),
            'image' => __('dashboard.image'),
        ];
    }

}
