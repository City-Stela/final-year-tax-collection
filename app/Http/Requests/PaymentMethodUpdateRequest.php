<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaymentMethodUpdateRequest extends Request
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
            'payment_method_name'=>'required|max:255|unique:payment_methods,payment_method_name,'.$this->route('paymentmethod'),
        ];
    }
}
