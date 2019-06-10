<?php

namespace App\Http\Requests\Tenant;

use Illuminate\Foundation\Http\FormRequest;

class BlackListFileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'files.*' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx',
            'is_visible' => 'boolean',
        ];
    }
}
