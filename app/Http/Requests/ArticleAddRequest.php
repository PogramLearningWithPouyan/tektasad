<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleAddRequest extends FormRequest
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
            'slug' => 'nullable|string',
            'body' => 'nullable|string',
            'title' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'tag' => 'nullable|string',
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'is_show'=>'required|integer'
        ];
    }
}
