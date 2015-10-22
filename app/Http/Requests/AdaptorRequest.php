<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdaptorRequest extends Request
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
     * Get the validation rules that apply to creating a new Adaptor in list form.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'value' => array('required' , 'regex:/^[ACGT]{0,20}$/' , 'max:20', 'unique:adaptor,value'),

            'default' => 'required | boolean'
        ];
    }
}
