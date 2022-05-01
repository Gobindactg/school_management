<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_marks', function (Blueprint $table) {
            $table->id();
            $table->integer('st_roll');
            $table->string('name');
            $table->string('class');
            $table->string('st_group');
            $table->string('st_year');
            $table->integer('bangla')->default(0);
            $table->integer('english')->default(0);
            $table->integer('math')->default(0);
            $table->integer('science')->default(0);
            $table->integer('bob')->default(0);
            $table->integer('religion')->default(0);
            $table->integer('music')->default(0);
            $table->integer('expressive_art')->default(0);
            $table->integer('physical')->default(0);
            $table->integer('user_id');
            $table->integer('student_info_id');
            $table->integer('institution_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_marks');
    }
};
