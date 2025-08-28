<?php

namespace App\Http\Requests\Manage\Admins;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
        $roles = [
            'name' => 'required|string|max:255',
            'role' => 'required|exists:roles,name',
        ];

        if ($this->isMethod('post')) {
            $roles['password'] = 'required|string|min:8';
            $roles['email'] = 'required|email|unique:admins,email';
        }else {
            $roles['password'] = 'nullable|string|min:8';
            $roles['email'] = 'required|email|unique:admins,email,' . $this->route('admin');
        }

        return $roles;
    }
}
