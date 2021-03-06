<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('maintexts',function($table){
			$table->increments('id');
			$table->string('name',40);
			$table->text('body');
			$table->string('url',40);
			$table->enum('showhide',array('show','hide'));
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
        //
		Schema::drop('maintexts');
    }
}
