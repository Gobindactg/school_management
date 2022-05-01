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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('institution_category');
            $table->string('institution_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->default("default.png");
            $table->float('user_level')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        /**
         * User Levels
         * 0 - Not Defined/Applied by Default while user create new account.
         *  0.1 - Users who applied in any instituions as Teachers or Stuff.
         * 1 - Web Application Administrative/Super Users
         * 2 - Institution Administrations (People Who Creates Institutions in this web application)
         * 3 - Teachers
         * 4 - Stuff
         *  4.1 - Accountants
         *  4.2 - Librarians
         *  4.3 - Transportation Administrative
         * 5 - Students
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
