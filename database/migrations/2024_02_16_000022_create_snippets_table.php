<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnippetsTable extends Migration
{
    public function up()
    {
        Schema::create('snippets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->longText('snippet')->nullable();
            $table->longText('code_snippet')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
