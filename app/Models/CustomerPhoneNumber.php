<?php

namespace App\Models;

use App\Casts\PhoneNumberCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerPhoneNumber extends Model
{
//    use HasFactory;


    protected $fillable = [
        'phone_number',
        'is_using_send_sms',
    ];

    protected $casts = [
        'customer_id' => 'int',
        'can_sms' => 'bool',
        'phone_number' => PhoneNumberCast::class,
        'is_using_send_sms' => 'bool',
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
        'deleted_at' => 'immutable_datetime',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
