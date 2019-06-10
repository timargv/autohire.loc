<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlackListTenantFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('black_list_tenant_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file');
            $table->boolean('is_visible')->nullable()->default(false);
            $table->string('type')->nullable(); // Какой тип документа
            $table->integer('author_id');
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
        Schema::dropIfExists('black_list_tenant_files');
    }
}
