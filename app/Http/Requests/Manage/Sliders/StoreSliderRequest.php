<?php

namespace App\Http\Requests\Manage\Sliders;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
        $rules = [
            'button_text.ar' => 'nullable|string|max:255',
            'button_text.en' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
        ];
        if($this->isMethod('post')) {
            $rules['image.ar'] = 'required|image|mimes:jpg,jpeg,png,gif|max:2048';
            $rules['image.en'] = 'required|image|mimes:jpg,jpeg,png,gif|max:2048';
        }else {
            $rules['image.ar'] = 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048';
            $rules['image.en'] = 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048';
        }
        
        return $rules;
    }

    public function withValidator($validator)
    {
        $validator->sometimes('link', 'required', function ($input) {
            return $input->button_text['ar'] || $input->button_text['en'];
        });
    }
}
