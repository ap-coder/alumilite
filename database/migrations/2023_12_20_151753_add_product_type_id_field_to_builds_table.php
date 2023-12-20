<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('builds', function (Blueprint $table) {
            $table->unsignedBigInteger('product_type_id')->nullable();
            $table->foreign('product_type_id', 'product_type_fk_926413900')->references('id')->on('product_types');
        });
    }
};