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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->longText('password')->nullable();
            $table->string('name');
            $table->float('float')->default(0);
            $table->string('file');
            $table->timestamps();

            $table->index('email');
            $table->unique(['email', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
