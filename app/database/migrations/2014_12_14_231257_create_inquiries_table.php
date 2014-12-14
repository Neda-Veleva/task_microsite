<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('inquiries', function($table)
            {
                $table->increments('id');
                $table->string('name');
                $table->string('family');
                $table->string('email');
                $table->string('subject');
                $table->string('content');
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
            Schema::drop('inquiries');
	}

}
