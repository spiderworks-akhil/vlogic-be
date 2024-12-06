<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Spam;

class BrochureRequest extends FormRequest
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
            'name' => 'required|max:255',
            'phone_number' => 'required|max:20',
            'email' => ['nullable', 'email', 'max:255'],
            'brochure_name' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Please enter your first name',
            'phone_number.required' => 'Please enter your phone number',
            'email.email' => 'Please enter a valid email address',
        ];
    }
}
