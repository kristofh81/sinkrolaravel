<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('product_type')->nullable()->index();
			$table->integer('user_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}