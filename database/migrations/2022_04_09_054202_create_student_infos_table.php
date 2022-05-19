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
        Schema::create('student_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('st_roll');
            $table->string('name');
            $table->string('class');
            $table->string('st_group');
            $table->string('st_year');
            $table->string('gender');
            $table->date('date_of_birth')->nullable();
            $table->integer('birth_reg_number')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->integer('father_nid')->nullable();
            $table->integer('mother_nid')->nullable();
            $table->text('address')->nullable();
            $table->integer('status')->default(0);
            $table->integer('user_id');
            $table->string('image')->nullable();
            
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
        Schema::dropIfExists('student_infos');
    }
};
