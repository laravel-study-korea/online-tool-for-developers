<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IpsumLoremRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'category' => ['required', 'integer', 'between:1,10'],
            'count' => ['required', 'integer', 'between:1,100'],
        ];
    }
}
