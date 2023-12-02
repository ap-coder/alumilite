<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalSpecsTable extends Migration
{
    public function up()
    {
        Schema::create('technical_specs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('published')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->string('value')->nullable();
            $table->string('icon_class')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
