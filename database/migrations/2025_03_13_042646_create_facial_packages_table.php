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
        Schema::create('facial_packages', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->string('images');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services1s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facial_packages');
    }
};
