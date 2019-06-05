<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlackListTenantCommentsTable extends Migration
{
    /**
     * Run the migrations.
     * Комментария к чёрному списку арендателей
     * @return void
     */
    public function up()
    {
        Schema::create('black_list_tenant_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('comment'); // Комметарий
            $table->string('status')->default('moderation'); // Статус комментария
            $table->integer('author_id');
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
        Schema::dropIfExists('black_list_tenant_comments');
    }
}
