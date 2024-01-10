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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('instagram_link')->nullable();
            $table->string('rss_link')->nullable();
            $table->string('email')->nullable();
            $table->string('working_hours')->nullable();
        });
    }
};
