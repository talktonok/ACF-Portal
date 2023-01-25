<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title'  => 'required',
            'firstName' => 'required',
            'lasstName' => 'required',
            'otherName' => 'required',
            'membershipID' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'chapter' => 'required',
            'address' => 'required',
            'imageURL' => 'required',
            'password' => 'required',

        ];
    }
}
