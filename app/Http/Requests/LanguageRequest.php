<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'      => 'required|string|regex:/^[a-zA-Z]+$/u|max:100',
            'abbr'      => 'required|string|regex:/^[a-zA-Z]+$/u|max:10',
            'direction' => 'required|in:rtl,ltr',
            'active'    => 'in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'the :attribute feild is required',
            'max' => 'you musn\'t ',
            'string' => 'the :attribute feild must be characters',
            'regex' => 'the :attribute feild musn\'t have special Characters',
        ];
    }
}
