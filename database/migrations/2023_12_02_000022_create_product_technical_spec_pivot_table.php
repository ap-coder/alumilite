<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTechnicalSpecPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_technical_spec', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_9264028')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('technical_spec_id');
            $table->foreign('technical_spec_id', 'technical_spec_id_fk_9264028')->references('id')->on('technical_specs')->onDelete('cascade');
        });
    }
}
