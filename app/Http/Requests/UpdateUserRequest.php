<?php

namespace App\Http\Requests;

class UpdateUserRequest extends Request
{

    protected $allowedFields = [
        'name','password'
    ];

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
            'name' => 'required|min:2|max:16',
            'password' => 'required|min:6|max:32|confirmed',
        ];
    }
}
