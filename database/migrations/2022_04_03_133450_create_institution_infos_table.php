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
        Schema::create('institution_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('emis_number');
            $table->string('image')->nullable();
            $table->string('division_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('upazila_id')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('institution_infos');
    }
};
