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
            $table->id(); //its like varchar
            $table->decimal('cost',8,2); //12345678.21
            $table->string('name');
            $table->string('email');
            $table->string('city');
            $table->string('status');
            $table->string('address');
            $table->string('phone');
            $table->date('date');
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
