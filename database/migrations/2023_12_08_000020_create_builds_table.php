<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildsTable extends Migration
{
    public function up()
    {
        Schema::create('builds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('published')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('timeframe')->nullable();
            $table->string('slug')->nullable();
            $table->string('customer_company')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_link')->nullable();
            $table->string('customer_website')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
