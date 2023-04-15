<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_phone_numbers', static function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('customer_id');
            $table->boolean('can_sms');
            $table->string('phone_number');
            $table->boolean('is_using_send_sms');

            $table->datetimes();
            $table->softDeletesDatetime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_phone_numbers');
    }
};
