<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            "author"=> "required|string|max:255|min:3",
            "content"=> "required|string|max:1000|min:3",
            //
        ];
    }
    public function messages(): array
    {
        return [
            'author.required' => 'The author field is required.',
            'author.string' => 'The author must be a string.',
            'author.max' => 'The author may not be greater than 255 characters.',
            'author.min' => 'The author must be at least 3 characters.',
            'content.required' => 'The content field is required.',
            'content.string' => 'The content must be a string.',
            'content.max' => 'The content may not be greater than 1000 characters.',
            'content.min' => 'The content must be at least 3 characters.',
        ];
    }
}
