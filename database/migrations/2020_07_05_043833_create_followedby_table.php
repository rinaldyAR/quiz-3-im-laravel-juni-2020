<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowedbyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followedby', function (Blueprint $table) {
            $table->bigInteger('followed_user')->unsigned();
            $table->bigInteger('follower')->unsigned();
            $table->foreign('followed_user')->references('iduser')->on('user');
            $table->foreign('follower')->references('iduser')->on('user');
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
        Schema::dropIfExists('followedby');
    }
}
