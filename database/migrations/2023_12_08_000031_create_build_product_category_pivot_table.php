<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildProductCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('build_product_category', function (Blueprint $table) {
            $table->unsignedBigInteger('build_id');
            $table->foreign('build_id', 'build_id_fk_9288290')->references('id')->on('builds')->onDelete('cascade');
            $table->unsignedBigInteger('product_category_id');
            $table->foreign('product_category_id', 'product_category_id_fk_9288290')->references('id')->on('product_categories')->onDelete('cascade');
        });
    }
}
