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
            $table->unsignedBigInteger('reservasiitem_id');
            $table->string('name');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('payment_account');
            $table->string('payment_proof');
            $table->enum('status', ['pending', 'confirmed'])->default('pending');
            $table->date('start_date')->nullable()->after('status'); 
            $table->date('end_date')->nullable()->after('start_date'); 
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('reservasiitem_id')->references('id')->on('reservasiitems')->onDelete('cascade');
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
