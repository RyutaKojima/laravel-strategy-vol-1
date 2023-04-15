<?php

declare(strict_types=1);

namespace App\Domains\ValueObjects;

final class EmailAddress
{
    public function __construct(
        public readonly string $value
    ) {
    }
}
