<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Config\Messages;

class MemberRequest extends FormRequest
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
        $rule = [
            'fullname'      => 'bail|required',
            'is_male'       => 'bail|required|boolean',
            'birthday'      => 'bail|sometimes|required|date',
            'email'         => 'bail|sometimes|required|email',
            'phone'         => array('bail', 'sometimes', 'required', 'regex:/^(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})$/'),
            // 'picture'       => 'bail|mimes:jpeg,png,jpg,gif|max:3072',
            'execute_by'    => 'bail|required|integer'
        ];

        if($this->getMethod() == 'POST'){
            $rule += ['username'    => 'bail|required|unique:member, username'];
            $rule += ['password'    => 'bail|required'];
            $rule += ['access_level'=> 'bail|integer'];
        }
        
        return $rule;
    }

    public function messages()
    {
        return [
            'username.required'     => EMPTY_USERNAME,
            'password.required'     => EMPTY_PASSWORD,
            'fullname.required'     => EMPTY_FULLNAME,
            'is_male.required'      => EMPTY_IS_MALE,
            'birthday.required'     => EMPTY_BIRTHDAY,
            'email.required'        => EMPTY_EMAIL,
            'phone.required'        => EMPTY_PHONE,
            'access_level.required' => EMPTY_ACCESS_LEVEL,
            'execute_by.required'   => EMPTY_EXECUTE_BY,
            'username.unique'       => IDENTICAL_USERNAME,
            'is_male.boolean'       => FORMAT_INVALID_IS_MALE,
            'birthday.date'         => FORMAT_INVALID_BIRTHDAY,
            'email.email'           => FORMAT_INVALID_EMAIL,
            'phone.regex'           => FORMAT_INVALID_PHONE,
            // 'picture.image'         => FORMAT_INVALID_IMAGE,
            // 'picture.mimes'         => FORMAT_INVALID_IMAGE,
            'picture.max'           => MAX_SIZE_PICTURE,
            'access_level.integer'  => INTEGER_ACCESS_LEVEL,
            'execute_by.integer'    => INTEGER_EXECUTE_BY
        ];
    }

    protected function failedValidation(Validator $validator)   //Chú ý nhớ import thư viện Illuminate\Contracts\Validation\Validator;
    {
        $error = $validator->errors()->first();
        throw new HttpResponseException(response()->json(
            [
                'status'  => 404,
                'message' => Messages::messages($error, 'en'),
                'data'    => []
            ]
        ));
    }
}
