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
        Schema::create('market_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            // $table->foreignId('commodity_id')->constrained();
            $table->text('comment_text');
            $table->unsignedTinyInteger('rating')->nullable();
            $table->enum('status', ['approved', 'pending', 'rejected'])->default('pending');
            // $table->foreignId('parentcomment_id')->comment('for nested comments')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_comments');
    }
};
