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
        Schema::create('product_features', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_926402800')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id', 'feature_id_fk_926402800')->references('id')->on('features')->onDelete('cascade');
        });
    }
};
