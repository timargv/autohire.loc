<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarAdvertDialogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_advert_dialogs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->integer('client_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->integer('car_advert_id')->references('id')->on('car_adverts')->onDelete('CASCADE');

            $table->integer('user_new_messages')->default(0);
            $table->integer('client_new_messages')->default(0);
            $table->timestamps();
        });

        Schema::create('car_advert_dialog_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dialog_id')->references('id')->on('car_advert_dialogs')->onDelete('CASCADE');
            $table->integer('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->text('message');
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
        Schema::dropIfExists('car_advert_dialogs');
        Schema::dropIfExists('car_advert_dialog_messages');
    }
}
