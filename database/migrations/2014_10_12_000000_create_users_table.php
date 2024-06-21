<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $current = Carbon::now();
       Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('email');
        $table->string('password');
         $table->integer('role_id');
        $table->rememberToken();
        $table->timestamps();
    });

       $data = array(

            // super admin
        array('name'=>'admin','email'=>'admin@wealthmaqers.com','role_id'=>1,'password'=>'$2y$10$esSxMW6nP.GxooOXdM/uROyIEwwgSyYIZmX2MGEf14qYJyOEVJy2.','created_at'=>$current,'updated_at'=>$current),

    );
       User::insert($data);
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
}
