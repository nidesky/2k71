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
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('username', 50)->unique();
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->timestamp('last_login')->nullable();
            $table->string('avatar')->nullable();
            $table->string('mobile')->nullable();
            $table->tinyInteger('level')->nullable()->default(0);
            $table->boolean('activated')->default(1);

            $table->string('weixin_id')->default('')->index();
            $table->string('weibo_id')->default('')->index();
            $table->string('github_id')->default('')->index();
            $table->string('qq_id')->default('')->index();

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
