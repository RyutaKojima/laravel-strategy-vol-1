<?php

declare(strict_types=1);

namespace App\Domains\ValueObjects;

use Illuminate\Support\Str;

final class PhoneNumber
{
    public function __construct(
        public readonly string $value,
    ) {
    }

    public function isMobileNumber(): bool
    {
        return Str::startsWith($this->getWithoutHyphens(), [
            '090',
            '080',
            '070',
        ]);
    }

    public function getWithoutHyphens(): string
    {
        return Str::replace('-', '', $this->value);
    }
}
