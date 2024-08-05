<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|unique:articles|max:255',
            'lead' => 'required|max:500',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'author_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
