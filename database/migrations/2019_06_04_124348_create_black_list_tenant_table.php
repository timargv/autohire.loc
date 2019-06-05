<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlackListTenantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Чёрный список арендаторов (tenant)
     *
     * @return void
     */
    public function up()
    {
        Schema::create('black_list_tenant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('status')->default('moderation'); // Статус аредатора из чёрного списка
            $table->integer('comment_id')->nullable(); // ID комментария к аредатору из чёрного списка
            $table->integer('author_id'); // ID автора который довабил арендатора в черный список
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
        Schema::dropIfExists('black_list_tenant');
    }
}
