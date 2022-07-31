<?php

namespace App\Http\Requests;

use App\Rules\CommaSeparated;
use App\Rules\CommaSeparatedCount;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UpdateCandidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:40',
            'education' => 'nullable|string|max:40',
            'birthday' => 'nullable|date',
            'experience' => 'nullable|string|max:10',
            'last_position' => 'nullable|max:30',
            'applied' => 'nullable||max:30',
            'top_skill' => ['nullable', 'string',new CommaSeparatedCount(5,40), new CommaSeparated() ],
            'email' => 'nullable|email|string',
            'phone' => 'nullable|numeric|regex:/(08)[0-9]{9}/',
            'resume' => 'nullable|mimes:pdf|max:10000'
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(ValidationValidator $validator)
    {
        if ($this->expectsJson()) {
            $errors = (new ValidationException($validator))->errors();
            throw new HttpResponseException(
                response()->error($errors, collect($errors)->first(),422)
            );
        }

        parent::failedValidation($validator);
    }
}
