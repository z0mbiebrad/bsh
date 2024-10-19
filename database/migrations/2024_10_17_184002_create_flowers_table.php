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
        Schema::create('t_h_c_a_flowers', function (Blueprint $table) {
            $table->id();
            $table->text('strain');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('stock')->default(0)->nullable();
            $table->string('quality'); 
            $table->decimal('thc_content', 5, 2)->nullable();
            $table->string('type'); // Possible values: Indica, Sativa, Hybrid
            $table->string('image_url')->nullable();
            $table->boolean('available')->default(true);
            $table->integer('quantity')->default(0)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_h_c_a_flowers');
    }
};
