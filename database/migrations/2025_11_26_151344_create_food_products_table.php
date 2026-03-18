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
        Schema::create('food_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('dietary_id')
                ->constrained('dietaries')
                ->cascadeOnDelete();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('food_image')->nullable();

            $table->string('chef_title')->nullable();
            $table->text('chef_notes')->nullable();

            $table->longText('description')->nullable();
            $table->longText('ingredients')->nullable();
            $table->longText('nutrition')->nullable();

            $table->unsignedTinyInteger('discount_percent')->nullable();
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->decimal('price', 10, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_products');
    }
};
