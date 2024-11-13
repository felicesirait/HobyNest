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
        Schema::create('community', function (Blueprint $table) {
            $table->id();
            $table->string('community_name')->unique();
            $table->unsignedBigInteger('creator_id')->index('fk_detail_user_to_users');
            $table->string('tags');
            $table->string('member');
            $table->timestamps();
    
            // Define foreign key constraint
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( 'community');
    }
};
