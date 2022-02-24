<?php

namespace App\Http\Requests;

use App\Services\IpsumLorem\Dto\IpsumLoremDto;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class IpsumLoremRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'category' => ['required', 'integer', 'between:1,10'],
            'count' => ['required', 'integer', 'between:1,100'],
        ];
    }

    protected function failedValidation(Validator $validator): HttpResponseException
    {
        throw new HttpResponseException(response()->json(
            [
                'result' => false,
                'message' => 'fail',
                'data' => $validator->errors(),
            ],
            Response::HTTP_UNPROCESSABLE_ENTITY,
            [],
            JSON_UNESCAPED_UNICODE,
        )
        );
    }

    public function toDto()
    {
        return new IpsumLoremDto(
            $this->category,
            $this->count
        );
    }
}
