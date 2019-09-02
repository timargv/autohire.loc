<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarAdvertFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_advert_favorites', function (Blueprint $table) {
            $table->integer('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->integer('car_advert_id')->references('id')->on('car_adverts')->onDelete('CASCADE');
            $table->primary(['user_id', 'car_advert_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_advert_favorites');
    }
}
