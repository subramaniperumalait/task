<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_profiles', function (Blueprint $table) {
    $table->id();
    $table->string('fullname'); 
    $table->string('email')->unique();
    $table->string('phonenumber', 30); // changed length
    $table->text('address');
    $table->string('city');
    $table->string('state');
    $table->string('country');
    $table->string('zipcode', 15);
    $table->integer('role')->default(1); // added default
    $table->enum('gender', ['male','female','other']);
    $table->date('dob');
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
        Schema::dropIfExists('user_profiles');
    }
}
