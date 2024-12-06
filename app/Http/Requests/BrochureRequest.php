<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Spam;

class BrochureRequest extends FormRequest
{
    public function authorize()
    {
        return true;  // Set to true if all users can access this request
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'phone_number' => 'required|max:20',
            'email' => ['nullable', 'email', 'max:255'],
            'organization' => ['required'],
            'country' => ['required'],
            'message' => ['nullable', new Spam()],
            'solutions' => ['nullable']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your first name',
            'phone_number.required' => 'Please enter your phone number',
            'email.email' => 'Please enter a valid email address',
            'phone_number.required' => 'Please enter your phone number',
            'organization.reruired' =>'Please enter your organization name',
            'country.required' => 'please enter your country name',

        ];
    }
}
