<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|nullable',
            'email' => 'string|nullable',
            'phone' => 'string|nullable',
            'birth_date' => 'date|nullable'
        ];
    }
}
