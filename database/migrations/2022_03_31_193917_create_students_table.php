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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');

            //Personal Information
            $table->string('Full_Name');
            $table->date("DOB");
            $table->string("Birth_Certificate_No");

            $table->string('Fathers_Name');
            $table->string('Fathers_NID');
            $table->string('Fathers_Phone_No');
            
            $table->string('Mothers_Name');
            $table->string('Mothers_NID');
            $table->string('Mothers_Phone_No');

            $table->string("Religion");
            $table->string('Address');
            $table->tinyText('Gender');
            $table->string('Photo');

            // Academic Information
            $table->integer('Roll');
            $table->string('Class');
            $table->string('Department')->default('N/A');


            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
};
