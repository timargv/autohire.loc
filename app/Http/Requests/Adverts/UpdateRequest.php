<?php

namespace App\Http\Requests\Adverts;

use App\Entity\Cars\Advert\Advert;
use App\User;
use Illuminate\Foundation\Http\FormRequest;


/**
 * @property Advert $carAdvert
 * @property User $user
 */
class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description'   => 'required|string',
            'price_per_day' => 'required|integer',
            'address'       => 'required|string',
            'type_rental'   => 'required|string',
            'attribute.*'   => 'required|string',
        ];
    }
}
