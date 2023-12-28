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
        Schema::table('static_seos', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id')->nullable();
            $table->foreign('post_id', 'post_fk_715344900')->references('id')->on('posts');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_715360011')->references('id')->on('products');
            $table->unsignedBigInteger('build_id')->nullable();
            $table->foreign('build_id', 'build_fk_715360100')->references('id')->on('builds');
        });
    }
};
