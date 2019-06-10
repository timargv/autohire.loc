<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlackListTenantPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('black_list_tenant_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo');
            $table->integer('author_id');
            $table->boolean('is_main')->nullable()->default(false);
            $table->integer('black_list_tenant_id')->references('id')->on('black_list_tenants')->onDelete('CASCADE');
            $table->string('status')->default('moderation');
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
        Schema::dropIfExists('black_list_tenant_photos');
    }
}
