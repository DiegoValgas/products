<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'code' => 'required|max:255',
            'price' => 'required|numeric',
            'price_promotion' => 'required|numeric',
            'tax' => 'required|numeric',
            'promotion' => 'in:0,1',
            'active' => 'in:0,1',
        ];
    }
}
