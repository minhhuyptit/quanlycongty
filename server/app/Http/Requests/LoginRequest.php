<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Config\Messages;

require_once app_path() . '/config/constants.php';


class LoginRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => EMPTY_USERNAME,
            'password.required' => EMPTY_PASSWORD
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
