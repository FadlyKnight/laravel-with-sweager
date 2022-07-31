<?php

namespace App\Http\Requests;

use App\Rules\CommaSeparated;
use App\Rules\CommaSeparatedCount;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class StoreCandidate extends FormRequest
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
            'name' => 'required|string|max:40',
            'education' => 'required|string|max:40',
            'birthday' => 'required|date',
            'experience' => 'required|string|max:10',
            'last_position' => 'required|max:30',
            'applied' => 'required||max:30',
            'top_skill' => ['required', 'string',new CommaSeparatedCount(5,40), new CommaSeparated() ],
            'email' => 'required|email|string',
            'phone' => 'required|numeric|regex:/(08)[0-9]{9}/',
            'resume' => 'required|mimes:pdf|max:10000'
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
