<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id', 'brand_fk_9288308')->references('id')->on('brands');
            $table->unsignedBigInteger('brand_model_id')->nullable();
            $table->foreign('brand_model_id', 'brand_model_fk_9288309')->references('id')->on('brand_models');
            $table->unsignedBigInteger('product_type_id')->nullable();
            $table->foreign('product_type_id', 'product_type_fk_9264139')->references('id')->on('product_types');
        });
    }
}
