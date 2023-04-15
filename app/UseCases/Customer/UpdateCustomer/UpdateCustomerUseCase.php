<?php

declare(strict_types=1);

namespace App\UseCases\Customer\UpdateCustomer;

use App\Models\Customer;

final class UpdateCustomerUseCase
{
    public function handle(UpdateCustomerParameter $param): Customer
    {
        $customer = new Customer();
        $customer->save();

        return $customer;
    }
}
