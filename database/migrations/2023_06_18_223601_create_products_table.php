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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('p_code');
            $table->integer('buying_price');
            $table->integer('selling_price')->nullable();
            $table->enum('in_stock', ['yes', 'no'])->default('no');
            $table->unsignedBigInteger('catagory_id');
            $table->foreign('catagory_id')->references('catagory_id')->on('catagories');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->integer('total_stock');
            $table->string('available_color')->nullable();
            $table->string('available_size')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
