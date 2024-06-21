<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\BlogType;

class CreateBlogTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('blog_types', function (Blueprint $table) {
            $table->increments('blog_type_id');
            $table->string('blog_type_name');
            $table->timestamps();
        });

        $data = array(
            array('blog_type_id' =>1,'blog_type_name' => 'Insurance'),
            array('blog_type_id' =>2,'blog_type_name' => 'Loans'),
            array('blog_type_id' =>3,'blog_type_name' => 'Investment'),
            array('blog_type_id' =>4,'blog_type_name' => 'Social'),
            array('blog_type_id' =>5,'blog_type_name' => 'Marketing'),
        );
        BlogType::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_types');
    }
}
