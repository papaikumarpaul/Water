<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFromRquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules=[
        'title'=>[
            'required',
            'string',
             'max:250'
        ],
        'slug'=>[
            'required',
            'string',
             'max:250'
        ],
        'details'=>[
            'required',
        ],
        'image'=>[
            'required',
            'file',
            'mimes:jpeg,jpg,png',
            'max:2048'
        ],
        'tags'=>[
            'required',
            'string',
             'max:250'
        ],
        'meta_tags'=>[
            'required',
            'string',
             'max:250'
        ],
        'meta_title'=>[
            'required',
            'string',
             'max:250'
        ],
       
        'meta_description'=>[
            'required',
            'string',
             'max:250'
        ],

        ];
        return $rules;
    }
}
