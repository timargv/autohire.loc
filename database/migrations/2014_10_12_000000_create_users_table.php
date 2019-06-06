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

            $table->string('forename')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();

            $table->string('role', 16)->default('user');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('phone')->nullable();
            $table->boolean('phone_auth')->default(false);
            $table->boolean('phone_verified')->default(false);
            $table->string('phone_verify_token')->nullable();
            $table->timestamp('phone_verify_token_expire')->nullable();

            $table->string('password');
            $table->string('verify_token')->nullable()->unique();
            $table->string('status', 16)->default('active');

            $table->string('city','16')->nullable();
            $table->text('about')->nullable();
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
        Schema::dropIfExists('users');
    }
}
