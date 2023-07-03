<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
                'unique:users',
            ],
            'password' => [
                'required',
            ],
            'department_id' => [
                'required',
                'integer',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
            ],
            'joining_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'date_of_birth' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'total_leaves' => [
                'numeric',
            ],
            'leaves_taken' => [
                'numeric',
            ],
        ];
    }
}