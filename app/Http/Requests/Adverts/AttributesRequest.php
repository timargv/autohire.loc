<?php

namespace App\Http\Requests\Adverts;

use App\Entity\Cars\Attribute;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property Attribute $attribute
 */

class AttributesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $items = [];

        foreach ($this->attribute->allAttributes() as $attribute) {
            $rules = [
                $attribute->required ? 'required' : 'nullable',
            ];
            if ($attribute->isInteger()) {
                $rules[] = 'integer';
            } elseif ($attribute->isFloat()) {
                $rules[] = 'numeric';
            } else {
                $rules[] = 'string';
                $rules[] = 'max:255';
            }
            if ($attribute->isSelect()) {
                $rules[] = Rule::in($attribute->variants);
            }
            $items['attribute.' . $attribute->id] = $rules;
        }

        return $items;
    }
}

