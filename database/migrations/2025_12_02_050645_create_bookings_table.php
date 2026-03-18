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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('occasion')->nullable();
            $table->date('date');
            $table->time('time');
            $table->unsignedTinyInteger('guests')->default(1);
            $table->string('table_preference')->nullable(); 
            $table->text('message')->nullable();
            $table->enum('status', ['pending', 'approved', 'booked', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
