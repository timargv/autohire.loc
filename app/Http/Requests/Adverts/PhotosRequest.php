<?php

namespace App\Http\Requests\Adverts;

use Illuminate\Foundation\Http\FormRequest;

class PhotosRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'files.*' => 'required|image|mimes:jpg,jpeg,png|max:20480',
        ];
    }

    public function messages()
    {
        return [
            'files.*.required' => 'Фотография обязательна.',
            'files.*.mimes'  => 'Фотография должен быть формата: :values.',
            'files.*.image'  => 'Файл должно быть изображением.',
            'files.*.max'  => 'Фотография не может быть больше чем 20480 кб или 20 мб.',
        ];
    }
}
