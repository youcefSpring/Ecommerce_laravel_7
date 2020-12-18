<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileAdmin extends FormRequest
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
            'name' => 'nullable|required|min : 5 |max :20',
           'email'=>'nullable|required|email|unique:admins,email,'.$this->id,
           'password'=>'nullable|required',
           'repassword'=>'nullable|required|same:password'
        ];
    }

    public function messages()
    {
        return[
          'email.required'=>'يجب ادخال الايميل',
          'email.email'=>'صيغة الايميل غير صحيحة',
          'password.required'=>'يجب ادخال كلمة المرور',
          'repassword.same' => 'كلمة المرور غير متطابقة',
        ];

    }

}
