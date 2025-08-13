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
        Schema::dropIfExists('tiny_urls');

        Schema::create('tiny_urls', function (Blueprint $table) {
            $table->id();
            $table->text("site_url");
            $table->string('short_url')->unique();
            $table->string("location")->nullable();
            $table->string("ip_address")->nullable();
            $table->string("browser")->nullable();
            $table->string("device")->nullable();
            $table->integer('visits')->default(0); // Assuming you want to track visits
            $table->timestamp('last_visited_at')->nullable(); // Optional: to track last visit time
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->index('short_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiny_urls');
    }
};
