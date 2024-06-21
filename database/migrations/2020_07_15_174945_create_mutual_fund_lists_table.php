<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use Carbon\Carbon;

class CreateMutualFundListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $current = Carbon::now();
        Schema::create('mutual_fund_lists', function (Blueprint $table) {
             $table->increments('mutual_fund_list_id');
            $table->string('mutual_fund_name');
            $table->string('mutual_fund_type');
            $table->string('logo');
            $table->string('aum_cr');
            $table->string('rating');
            $table->decimal('one_year');
            $table->decimal('three_year');
            $table->decimal('five_year');
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
        Schema::dropIfExists('mutual_fund_lists');
    }
}
