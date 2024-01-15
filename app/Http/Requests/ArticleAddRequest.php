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
            'slug' => 'required|string',
            'body' => 'required|string',
            'title' => 'required|string',
            'excerpt' => 'required|string',
            'category' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'is_show'=>'required|string',
            'keyword'=>'nullable|string',
            'description' => 'nullable|string',
        ];
    }
}
