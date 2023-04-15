<?php

declare(strict_types=1);

namespace App\UseCases\Customer\CreateCustomer\Parameters;

use App\Domains\ValueObjects\PhoneNumber;

final class PhoneNumberStruct
{

    public function __construct(
        public readonly bool $isUsingSendSms,
        public readonly PhoneNumber $number,
    ) {
    }
}
