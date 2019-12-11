<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code');
            $table->string('product_name');
            $table->text('short_description');
            $table->text('full_description');
            $table->decimal('price');
            $table->decimal('special_price');
            $table->text('meta_keyword');
            $table->text('meta_description');
            $table->string('page_title');
            $table->string('main_image');
            $table->text('note');
            $table->unsignedBigInteger('state_id');
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
        Schema::dropIfExists('products');
    }
}
