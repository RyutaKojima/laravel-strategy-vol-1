<?php

declare(strict_types=1);

namespace App\UseCases\Customer\CreateCustomer;

use App\Models\Customer;
use App\UseCases\Customer\CreateCustomer\Parameters\PhoneNumberStruct;

final class CreateCustomerUseCase
{
    public function handle(CreateCustomerParameter $param): Customer
    {
        $customer = new Customer([
            'last_name' => $param->lastName,
            'first_name' => $param->firstName,
        ]);
        $customer->save();

        $customer->emails()->createMany(
            $param->emails
                ->unique()
                ->map(fn(string $email) => [
                    'email_address' => $email,
                ])
                ->all()
        );


        $customer->phoneNumbers()->createMany(
            $param->phoneNumbers
                ->unique()
                ->map(fn(PhoneNumberStruct $phoneNumber) => [
                    'phone_number' => $phoneNumber->number,
                    'is_using_send_sms' => $phoneNumber->isUsingSendSms,
                ])
                ->all()
        );

        return $customer->fresh();
    }
}
