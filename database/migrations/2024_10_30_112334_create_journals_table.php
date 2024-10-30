<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('knowledge_area');
            $table->integer('publication_year');
            $table->integer('pages');
            $table->string('discipline');
            $table->string('publisher');
            $table->integer('volume');
            $table->string('available_to')->default('Students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('journals');
    }
};
