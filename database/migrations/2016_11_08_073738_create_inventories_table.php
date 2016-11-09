<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asset_model');
            $table->string('asset_status');
            $table->string('asset_location');
            $table->string('asset_type');
            $table->string('asset_serial');
            $table->string('asset_tag');
            $table->string('asset_user');
            $table->string('asset_notes');
            $table->string('contact_number');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
