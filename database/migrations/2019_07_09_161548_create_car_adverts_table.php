<?php

use App\Entity\Cars\Advert\Advert;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_adverts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_brand_id')->references('id')->on('car_brands');
            $table->integer('car_model_id')->references('id')->on('car_brands');
            $table->integer('car_serie_id')->references('id')->on('car_brands');
            $table->integer('car_year_id')->references('id')->on('car_years');
            $table->integer('author_id')->references('id')->on('users')->onDelete('CASCADE');

            $table->string('type_rental')->nullable()->default(Advert::TYPE_RENTAL_DAILY); // Тип Аренды

            $table->text('description')->nullable();
            $table->integer('price_per_day'); // Цена за сутки
            $table->text('address')->nullable();
            $table->string('status', 16);
            $table->text('reject_reason')->nullable();  // Причина отклонения
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('expires_at')->nullable();
        });

        Schema::create('car_advert_values', function (Blueprint $table) {
            $table->integer('car_advert_id')->references('id')->on('car_adverts')->onDelete('CASCADE');
            $table->integer('car_attribute_id')->references('id')->on('car_attributes')->onDelete('CASCADE');
            $table->string('value');
            $table->primary(['car_advert_id', 'car_attribute_id']);
        });

        Schema::create('car_advert_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_advert_id')->references('id')->on('car_adverts')->onDelete('CASCADE');
            $table->string('file');
            $table->string('type', 16)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_adverts');
        Schema::dropIfExists('car_advert_photos');
        Schema::dropIfExists('car_advert_values');
    }
}
