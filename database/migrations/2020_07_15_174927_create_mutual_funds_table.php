<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutualFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutual_funds', function (Blueprint $table) {
           $table->increments('mutual_fund_id');
            $table->decimal('sip_amount');
            $table->integer('expected_returns');
            $table->integer('investment_duration');
            $table->string('value_of_investment');
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
        Schema::dropIfExists('mutual_funds');
    }
}
