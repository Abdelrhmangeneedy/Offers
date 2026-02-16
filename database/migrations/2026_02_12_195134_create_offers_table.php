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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cate_id')
            ->constrained('categories')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->foreignId('shop_id')
            ->constrained('shops')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->string('name');
            $table->string('slug');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->longText('description');
            $table->string('original_price')->nullable();
            $table->string('offer_price')->nullable();
            $table->string('period');
            $table->string('image');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('trending')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
