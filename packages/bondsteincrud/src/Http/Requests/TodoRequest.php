<?php

namespace Bondstein\Crud\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Update this according to your authorization logic
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a string.',
        ];
    }
}
