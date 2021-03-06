<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'hot_name' => 'required',
            'hot_price' => 'required',
            'hot_address' => 'required',
            'hot_details' => 'required',
            'discount'=>'required|numeric',
            'hot_type' => 'required',
            'hot_image' => 'required',
            // 'user_id' => 'required',
        ];
    }
}
