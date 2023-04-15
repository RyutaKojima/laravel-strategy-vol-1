<?php

declare(strict_types=1);

namespace App\UseCases\Customer\UpdateCustomer;

final class UpdateCustomerParameter
{
    public function __construct(
        public readonly string $lastName,
    )
    {
    }
}
