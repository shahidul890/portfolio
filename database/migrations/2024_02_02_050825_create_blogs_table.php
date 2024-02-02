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
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('slug');
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('creator_id');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users')
            ->restrictOnDelete()->cascadeOnUpdate();
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
