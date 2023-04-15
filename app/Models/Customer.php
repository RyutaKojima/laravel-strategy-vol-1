<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
//    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'birthday',
        'residence_zip_code',
        'residence_pref',
        'residence_city',
        'residence_street',
        'memo',
    ];

    protected $casts = [
        'last_name' => 'string',
        'first_name' => 'string',
        'birthday' => 'immutable_date:Y-m-d',
        'residence_zip_code' => 'string',
        'residence_pref' => 'string',
        'residence_city' => 'string',
        'residence_street' => 'string',
        'memo' => 'string',
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
        'deleted_at' => 'immutable_datetime',
    ];

    public function emails(): HasMany
    {
        return $this->hasMany(CustomerEmail::class);
    }

    public function phoneNumbers(): HasMany
    {
        return $this->hasMany(CustomerPhoneNumber::class);
    }
}
