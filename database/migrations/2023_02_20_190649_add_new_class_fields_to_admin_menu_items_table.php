<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewClassFieldsToAdminMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_menu_items', function (Blueprint $table) {
            $table->boolean('marketing')->default(0)->nullable();
            $table->boolean('logged_in_only')->default(0)->nullable();
            $table->boolean('icon_only_menu')->default(0)->nullable();
            $table->string('menu_icon_class')->nullable();
        });
    }
}
