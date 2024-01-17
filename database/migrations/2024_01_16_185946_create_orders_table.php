<?php

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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();

            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('zip')->nullable();

            $table->string('registered_name')->nullable();
            $table->string('mobile_number')->nullable();

            $table->string('order_number');

            $table->string('status')->default('pending');
            $table->string('payment_method')->default('mpesa');
            $table->string('payment_status')->default('pending');

            $table->string('transaction_id')->nullable();

            // amount
            $table->unsignedBigInteger('amount');
            $table->string('currency')->default('TZS');

            // user id
            $table->unsignedBigInteger('user_id')->nullable();

            $table->string('external_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
