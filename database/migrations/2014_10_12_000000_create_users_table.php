<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('photo_id')->default(1);
          //  $table->enum('role',['admin', 'author', 'subscriber'])->default('author');
            $table->integer('role_id')->unsigned()->index()->default(1);
            $table->integer('is_active')->default(0);
            $table->boolean('activated')->default(false)->index();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
