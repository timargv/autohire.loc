<?php

namespace App\Http\Requests\Adverts;

use Illuminate\Foundation\Http\FormRequest;

class DialogRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'message' => 'required|string|max:655'
        ];
    }
}
