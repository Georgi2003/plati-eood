<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CivilResponsibilityRequestPost extends FormRequest
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
            'user_id' => 'min:1|max:10',
            'status' => 'min:2|max:15',
        ];
    }
}
