<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'reference' => 'bail|required|min:1|max:100',
            'designation' => 'bail|required|max:255',
            'quantity' => 'bail|required',
            'price' => 'bail|required',
            'picture' => 'mimes:jpg,jpeg',
        ];
    }
}
