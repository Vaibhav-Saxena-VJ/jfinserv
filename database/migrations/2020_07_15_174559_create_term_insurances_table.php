<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_insurances', function (Blueprint $table) {
            $table->increments('term_insurance_id');
            $table->integer('current_age');
            $table->decimal('annual_income');
            $table->integer('annual_increment');
            $table->decimal('savings');
            $table->decimal('loan');
            $table->string('required_cover');
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
        Schema::dropIfExists('term_insurances');
    }
}
