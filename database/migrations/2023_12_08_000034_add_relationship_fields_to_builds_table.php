<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBuildsTable extends Migration
{
    public function up()
    {
        Schema::table('builds', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id', 'brand_fk_9288310')->references('id')->on('brands');
            $table->unsignedBigInteger('brand_model_id')->nullable();
            $table->foreign('brand_model_id', 'brand_model_fk_9288311')->references('id')->on('brand_models');
        });
    }
}