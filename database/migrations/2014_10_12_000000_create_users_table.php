<?php

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
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('guthaben');
            $table->integer('rankid');
            $table->string('drop_name');
            $table->string('drop_strasse_hausnr');
            $table->string('drop_plz_ort');
            $table->string('drop_land');
            $table->string('ps_name');
            $table->string('ps_postnr');
            $table->string('ps_psnr');
            $table->string('ps_plz_ort');
            $table->string('ps_land');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
