<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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

            'title' => 'required|bail|min:3|max:100',
            'description' => 'nullable|min:10|max:1000',
            'thumb' => 'nullable|image',
            'price' => 'required|min:3|max:5',
            'series' => 'nullable|min:3|max:100',
            'type' => 'nullable|min:3|max:100',
            'sale_date' => 'nullable|min:10'
        ];
    }
}
