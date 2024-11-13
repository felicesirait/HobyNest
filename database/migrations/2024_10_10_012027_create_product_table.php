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
        Schema::create('product', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('seller_id')->index('fk_product_seller_to_users');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->string('product_name');
            $table->timestamps();
    
            // Define foreign key constraint
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( 'product');
    }
};
