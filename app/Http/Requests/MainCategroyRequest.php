<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainCategroyRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ];
    }

    public function messages()
    {
        return[
          'name.required' => 'الاسم اجباري',
          'slug.required' => 'الحقل اجباري',
          'slug.unique' => 'الحقل اجباري'
        ];
    }

}
