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
            'files.*' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:5120',
            'is_visible' => 'boolean',
        ];
    }
}
