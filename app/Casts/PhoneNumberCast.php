<?php

declare(strict_types=1);

namespace App\Casts;

use App\Domains\ValueObjects\PhoneNumber;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

final class PhoneNumberCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return new PhoneNumber($attributes['phone_number']);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): array
    {
        if (! $value instanceof PhoneNumber) {
            throw new InvalidArgumentException('The given value is not an Address instance.');
        }

        return [
            'can_sms' => $value->isMobileNumber(),
            'phone_number' => $value->value,
        ];
    }
}
