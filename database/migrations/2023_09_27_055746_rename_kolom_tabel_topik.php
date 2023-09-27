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
//        Schema::table('topiks', function (Blueprint $table) {
//            $table->string('slug');
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::table('topiks', function (Blueprint $table) {
////            $table->renameColumn('title', 'judul');
//            $table->removeColumn('slug');
//        });
    }
};
