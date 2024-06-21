<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refer_friends', function (Blueprint $table) {
            $table->increments('refer_friend_id');
            $table->string('referred_by');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('referral_link');
            $table->string('product_id');
            $table->string('status_id')->default(0);
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
        Schema::dropIfExists('refer_friends');
    }
}
