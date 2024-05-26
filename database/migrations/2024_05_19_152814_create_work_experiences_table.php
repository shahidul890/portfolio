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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('job_title')->nullable();
            $table->string('designation')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('working_period')->nullable();
            $table->date('start_from')->nullable();
            $table->date('end_at')->nullable();
            $table->string('skills')->nullable();
            $table->longText('responsibilities')->nullable();
            $table->boolean('active');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')
            ->restrictOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
