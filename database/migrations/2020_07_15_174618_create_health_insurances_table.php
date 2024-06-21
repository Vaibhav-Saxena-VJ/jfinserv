<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_insurances', function (Blueprint $table) {
           $table->increments('health_insurance_id');
           $table->integer('current_age');
           $table->integer('gender');
           $table->string('city');
           $table->string('email');
           $table->string('mobile');
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
        Schema::dropIfExists('health_insurances');
    }
}
