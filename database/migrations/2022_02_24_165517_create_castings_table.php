<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('castings', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('childName');
            $table->date('dateOfBirth');
            $table->string('parentName');
            $table->string('height', 3);
            $table->string('weight', 3);
            $table->string('education');
            $table->string('nation');
            $table->string('clothesSize', 3);
            $table->string('bootsSize', 3);
            $table->string('langs');
            $table->string('musicSkills');
            $table->string('danceSkills');
            $table->string('sports');
            $table->string('horseRiding');
            $table->string('mobilePhone', 20);
            $table->string('homePhone', 20);
            $table->string('parentPhone', 20);
            $table->string('email');
            $table->string('insta');
            $table->string('experience');
            $table->string('episode', 3);
            $table->string('mass', 3);
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
        Schema::dropIfExists('castings');
    }
}
