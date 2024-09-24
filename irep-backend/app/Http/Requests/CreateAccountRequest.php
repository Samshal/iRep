<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:accounts',
            'phone' => 'required|string|max:15',
            'dob' => 'required|date',
            'password' => 'required|string|min:6',
            'role' => 'required|in:citizen,representative',
            'state' => 'required|string|max:100',
            'local_government' => 'required|string|max:100',
            'polling_unit' => 'required|string|max:100',
            'occupation' => 'required_if:role,citizen|string|max:255',
            'address' => 'required_if:role,citizen|string|max:255',
            'position' => 'required_if:role,representative|string|max:255',
            'party' => 'required_if:role,representative|string|max:255',
            'constituency' => 'required_if:role,representative|string|max:255',
        ];
    }
}
