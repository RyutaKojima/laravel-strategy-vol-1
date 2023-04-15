<?php

declare(strict_types=1);

namespace App\UseCases\Customer\CreateCustomer;

use App\Domains\ValueObjects\PhoneNumber;
use App\UseCases\Customer\CreateCustomer\Parameters\PhoneNumberStruct;
use Illuminate\Support\Collection;

final class CreateCustomerParameter
{
    public readonly string $lastName;
    public readonly string $firstName;

    /** @var Collection<string> */
    public readonly Collection $emails;

    /** @var Collection<PhoneNumber> */
    public readonly Collection $phoneNumbers;

    public function __construct(array $validated)
    {
        $this->lastName = data_get($validated, 'last_name');
        $this->firstName = data_get($validated, 'first_name');

        $this->emails = collect(data_get($validated, 'emails', []));

        $this->phoneNumbers = collect(data_get($validated, 'phone_numbers', []))
            ->map(fn(array $values) => new PhoneNumberStruct(
                data_get($values, 'is_using_send_sms', false),
                new PhoneNumber($values['number']),
            ));
    }

}
