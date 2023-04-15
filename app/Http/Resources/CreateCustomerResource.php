<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Customer
 */
final class CreateCustomerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'birthday' => $this->birthday,
            'residence_zip_code' => $this->residence_zip_code,
            'residence_pref' => $this->residence_pref,
            'residence_city' => $this->residence_city,
            'residence_street' => $this->residence_street,
            'memo' => $this->memo,
        ];
    }
}
