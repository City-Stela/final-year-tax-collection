<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class BusinessTypeUpdateRequest extends Request
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
            'business_types_name'=>'required|max:255|unique:business_types,business_types_name,'.$this->route('businesstype'),
            'business_types_amount'=>'required|unique:business_types,business_types_amount,'.$this->route('businesstype'),
        ];
    }
}
