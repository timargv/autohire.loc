<?php

namespace App\Http\Requests\Adverts;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Entity\Cars\Attribute;


class CreateRequest extends FormRequest
{

    public function authorize() : bool
    {
        return true;
    }


    public function rules() : array
    {
        $items = [];





        return array_merge([
            'description'   => 'required|string',
            'price_per_day' => 'required|integer',
            'address'       => 'required|string',
            'type_rental'   => 'required|string',
            'attribute.*'    => 'required|string',
        ], $items);


    }
}
