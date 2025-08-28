<?php

namespace App\Http\Requests\Manage\Services;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        $rules =  [
            'title.ar' => ['required', 'string', 'max:255'],
            'title.en' => ['required', 'string', 'max:255'],

            'description.ar' => ['nullable', 'string'],
            'description.en' => ['nullable', 'string'],

            'content.ar' => ['nullable', 'string'],
            'content.en' => ['nullable', 'string'],
        ];

        if ($this->isMethod('post')) {
            $rules['image'] = ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'];
            $rules['icon'] = ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'];
        } else {
            $rules['image'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'];
            $rules['icon'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'];
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
            'content.ar' => __('dashboard.content'),
            'content.en' => __('dashboard.content'),
            'image' => __('dashboard.image'),
        ];
    }

}
