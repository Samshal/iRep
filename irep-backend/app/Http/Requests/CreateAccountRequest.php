<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

/*
* Class to validate the request to create an account
*/
class CreateAccountRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /*
    * Rules to validate the request
    */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:citizens,email|unique:representatives,email',
            'phone_number' => 'required|string|max:20|unique:citizens,phone_number|unique:representatives,phone_number',
            'dob' => 'required|date',
            'password' => 'required|string|min:6',
            'account_type' => 'required|string|exists:account_types,name',
            'state' => 'required|string|max:255',
            'local_government' => 'required|string|max:255',
            'photo_url' => 'string|max:255|nullable',
            'polling_unit' => 'string|max:255|nullable',
            'occupation' => 'required_if:account_type_id,1|string|max:255',
            'location' => 'required_if:account_type_id,1|string|max:255',
            'position' => 'required_if:account_type_id,2|string|max:255',
            'party' => 'required_if:account_type_id,2|string|max:255',
            'constituency' => 'required_if:account_type_id,2|string|max:255',
        ];
    }
    /*
    * Custom validation error message
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status' => 'validation_error',
                'errors' => $validator->errors()
            ], 422)
        );
    }

    /*
    * Custom authorization error message
    */
    protected function failedAuthorization()
    {
        throw new HttpResponseException(
            response()->json([
                'status' => 'authorization_error',
                'message' => 'You are not authorized to perform this action.'
            ], 403)
        );
    }

}
