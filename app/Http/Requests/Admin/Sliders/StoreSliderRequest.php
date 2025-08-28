<?php

namespace App\Http\Requests\Admin\Sliders;

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
    public function rules()
    {
        $imageRule = $this->isMethod('post') ? ['required', 'image', 'max:2048'] : ['nullable', 'image', 'max:2048'];

        return [
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['required', 'string', 'max:255'],
            'image' => $imageRule,
            'text_horizontally' => ['required', 'in:left,center,right'],
            'text_vertically' => ['required', 'in:top,center,bottom'],
            'text_color' => ['nullable', 'string', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'button_text' => ['nullable', 'string', 'max:255'],
            'button_link' => ['nullable', 'url', 'max:255'],
            'button_horizontally' => ['required', 'in:left,center,right'],
            'button_vertically' => ['required', 'in:top,center,bottom'],
            'button_color' => ['nullable', 'string', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'is_active' => ['sometimes'],
        ];
    }


}
