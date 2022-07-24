<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'brand_id' => ['required','integer'],
            'category_id' => ['required','integer'],
            'name' => ['required','string'],
            'image' => ['required','string'],
            'description' => ['nullable','text'],
            'content' => ['nullable','text'],
            'price' => ['required','double'],
            'qty' => ['required','integer'],
            'discount' => ['nullable','double'],
            'weight' => ['required','double'],
            'sku' => ['required','string'],
            'tag' => ['required','string']
        ];
    }
}
