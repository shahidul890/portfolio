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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('creator_id');
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('slug');
            $table->string('tags')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')
            ->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('creator_id')->references('id')->on('users')
            ->restrictOnDelete()->cascadeOnUpdate();

            $table->index('title');
            $table->index('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
