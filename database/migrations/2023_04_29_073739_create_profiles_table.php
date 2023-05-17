<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->string('location');
            $table->string('team')->nullable(); //team
            $table->string('game'); //main game
            $table->string('ign'); //in-game id
            $table->string('rank'); //in-game rank
            $table->string('pfp'); //profile pic
            $table->string('fblink'); //facebook link
            $table->string('twtlink'); //twitter link
            $table->string('discid')->nullable(); //discord id
            $table->boolean('onTeam')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
