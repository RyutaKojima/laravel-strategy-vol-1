<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class CreateCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'last_name' => ['required', 'string'],
            'first_name' => ['string'],
            'emails' => ['array'],
            'emails.*' => ['string', 'email:rfc,strict,dns,spoof'],
            'phone_numbers' => ['array'],
            'phone_numbers.*' => ['array'],
            'phone_numbers.*.is_using_send_sms' => ['bool'],
            'phone_numbers.*.number' => ['string', 'regex:/^[-0-9]+$/'],
        ];
    }
}
