<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use App\Models\JobPostingQuestion;

class SubmitInvitationRequest extends FormRequest
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
            'accept-terms' => 'required|in:on',
            'interview_date' => 'required|date',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'terms' => 'required|in:on',
            'question' => 'required|array',
            'question.*' => 'required|string',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ];
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator(Validator $validator): void
    {
        $validator->after(function ($validator) {
            $questionIds = array_keys($this->input('question', []));

            if (empty($questionIds)) {
                return; 
            }

            $existingIds = JobPostingQuestion::whereIn('id', $questionIds)->pluck('id')->toArray();

            $missingIds = array_diff($questionIds, $existingIds);

            if (!empty($missingIds)) {
                $validator->errors()->add('question', 'Invalid question IDs: ' . implode(', ', $missingIds));
            }
        });
    }
}
