<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique();
            $table->string('name');
            $table->string('avatar')->default("");
            $table->string('lang_level');
            $table->string('language');
            $table->string('sex');
            $table->string('year_of_birth');
            $table->string('country');
            $table->string('phone_number');
            $table->string('profile_headline');
            $table->string('description');
            $table->string('video_introduction');
            $table->string('university');
            $table->string('degree');
            $table->string('skype_id');
            $table->string('certificate');
            $table->integer('tutoring_experience');
            $table->integer('hourly_rate');
            $table->string('group_lessons');
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
        Schema::dropIfExists('teachers');
    }
}
