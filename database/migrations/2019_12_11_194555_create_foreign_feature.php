<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_features', function (Blueprint $table) {
            $table->foreign('product_feature_value_id')->references('id')->on('product_feature_values')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_feature_value_description_id')->references('id')->on('product_feature_value_descriptions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_features', function (Blueprint $table) {
            //
        });
    }
}
