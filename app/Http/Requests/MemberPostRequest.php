<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>"required",
            'male_lastname'=>"required",
            'female_lastname'=>"required",
            'code'=>"required",
        ];
    }
}
