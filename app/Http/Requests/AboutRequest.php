<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'description' => 'required|min:5|max:255',
            'skill' => 'required|min:5|max:255',
            'sub_skill' => 'required|min:5|max:255'
        ];
    }
}
