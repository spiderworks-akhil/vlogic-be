<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrochureRequest extends FormRequest
{
    public function authorize()
    {
        return true;  // Set to true if all users can access this request
    }

    public function rules()
    {
        return [
            'slug' => 'string|max:191',
            'brochures' => 'pdf|max:191',
            'content' => 'nullable|',
            // Add other fields as necessary
        ];
    }
}
