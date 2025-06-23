<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
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
            
            'title'=> 'bail|required|string|max:255|unique:post,title,'. $this->input('id').'|min:3',
            'body'=> 'bail|required|string|max:1000',
            'author'=> 'bail|required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'mandatory field',
            'title.unique' => 'mandatory field',
            'body.required' => 'mandatory field',
            'author.required' => 'mandatory field',
        ];
    }
}
