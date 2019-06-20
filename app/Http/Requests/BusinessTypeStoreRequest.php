<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
class BusinessTypeStoreRequest extends Request
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
            'business_types_name'=>'required|unique:business_types|max:255',
            'business_types_amount'=>'required|unique:business_types'
        ];
    }
}
