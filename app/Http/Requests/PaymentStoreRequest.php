<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaymentStoreRequest extends Request
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
            'payment_token'=>'required|max:255|unique:payments',
            'status_id'=>'required:payments',
            'customer_id'=>'required:payments',
            'payment_method_id'=>'required:payments',
        ];
    }
}
