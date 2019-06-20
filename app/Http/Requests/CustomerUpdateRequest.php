<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerUpdateRequest extends Request
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
            'name'=>'required|max:255|unique:customers,name,'.$this->route('managecustomer'),
            'business_type_id'=>'required:customers,business_type_id,'.$this->route('managecustomer'),
        ];
    }
}
