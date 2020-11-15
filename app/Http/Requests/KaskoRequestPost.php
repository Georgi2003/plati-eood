<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaskoRequestPost extends FormRequest
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
            'coupon_file' => 'min:2|max:30',
            'name' => 'min:2|max:20',
            'phone' => 'min:10|max:15',
            'email' => 'min:5|max:30',
            'message' => 'min:5',
            'phone' => 'min:10|max:15',
        ];
    }
}
