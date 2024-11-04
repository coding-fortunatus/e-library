<?php

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\PseudoTypes\True_;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('matric_number')->unique();
            $table->foreignIdFor(Faculty::class)->nullable()->cascadeOnDelete();
            $table->foreignIdFor(Department::class)->nullable()->cascadeOnDelete();
            $table->string('status')->default('In-active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('students');
    }
};
