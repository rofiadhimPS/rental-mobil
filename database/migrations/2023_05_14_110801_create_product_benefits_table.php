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
        Schema::create('product_benefits', function (Blueprint $table) {
            $table->id();
            // 1st method
            // $table->bigInteger('product_id')->unsigned();
            
            // 2nd method
            $table->foreignId('product_id')->constrained();
            $table->string('tipe_mobil');
            $table->string('tahun');
            $table->string('warna');
            $table->integer('seat');
            $table->timestamps();

            // 1st method
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_benefits');
    }
};
