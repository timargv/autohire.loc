<?php

namespace App\Http\Requests\Tenant;

use Illuminate\Foundation\Http\FormRequest;

class BlackListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
            'files.*' => 'nullable|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx',
            'comment' => 'nullable|string|min:2|max:3000',
        ];
    }
}
