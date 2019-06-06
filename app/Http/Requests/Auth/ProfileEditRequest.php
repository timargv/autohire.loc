<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ProfileEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'about' => 'nullable|string|max:3000',
            'phone' => 'required|string|min:10|max:10|regex:/^\d+$/s',
        ];
    }
}
