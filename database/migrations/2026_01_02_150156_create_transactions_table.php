<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('order_id');
        $table->string('payment_method');
        $table->double('amount');
        $table->enum('status', ['success','failed','waiting'])
            ->default('waiting');
        $table->timestamps();
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
