<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Department;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('lecturenotes', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('author');
            $table->foreignIdFor(Department::class);
            $table->integer('publication_year');
            $table->integer('pages');
            $table->string('publisher');
            $table->string('available_to')->default('Students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('lecturenotes');
    }
};
