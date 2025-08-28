<?php

namespace App\Http\Requests\Manage\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class SendInvitesRequest extends FormRequest
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
            'emails' => ['nullable', 'string'],
            'file'   => ['nullable', 'mimes:xlsx,xls,csv,txt', 'max:2048'],
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param \Illuminate\Validation\Validator $validator
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $hasEmails = filled($this->emails);
            $hasFile   = $this->hasFile('file');

            // Both are empty → invalid
            if (!$hasEmails && !$hasFile) {
                $validator->errors()->add('emails', __('validation.emails_or_file_required'));
                $validator->errors()->add('file', __('validation.file_or_emails_required'));
            }

            // Both are filled → invalid
            if ($hasEmails && $hasFile) {
                $validator->errors()->add('emails', __('validation.only_one_allowed'));
                $validator->errors()->add('file', __('validation.only_one_allowed'));
            }
        });
    }
}
