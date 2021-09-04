<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPostRequest extends FormRequest
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
            'productName' => 'required',
            'productSummary'=> 'required',
            'productOldPrice'=> 'required',
            'productNewPrice'=> 'required',
            'productDesription'=> 'required',
            'productInventory'=> 'required',
            'procutExpirationDate'=> 'required',
            'productFilePathImage' => 'required',
            'brand_id' => 'required'
        ];
    }
}
