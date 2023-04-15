<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', static function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name')->default('');
            $table->date('birthday')->nullable();
            $table->string('residence_zip_code')->default('');
            $table->string('residence_pref')->default('');
            $table->string('residence_city')->default('');
            $table->string('residence_street')->default('');
            $table->string('memo')->default('');

            $table->datetimes();
            $table->softDeletesDatetime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
