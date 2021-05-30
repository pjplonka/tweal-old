<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('extension');
            $table->string('filename');
            $table->string('full_name');
            $table->integer('width');
            $table->integer('height');
            $table->integer('size');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE images ADD content LONGBLOB AFTER size");
    }

    public function down(): void
    {
        Schema::dropIfExists('images');
    }
}
