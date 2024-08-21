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
        Schema::create('bees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->double('price');
            $table->string('qantylly');
            $table ->string('bee_status')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bees');
    }
};
