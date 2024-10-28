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
        Schema::create('marketplace', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('fk_marketplace_user_to_users');
            $table->unsignedBigInteger('product_id')->index('fk_marketplace_product_to_products');
            $table->timestamps();
    
            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketplace');
    }
};
