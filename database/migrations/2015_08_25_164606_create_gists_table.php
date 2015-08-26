<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gists', function($table)
        {
            $table->increments('id');
            $table->string('title', 50)->index();
            $table->string('filename', 100)->default('')->nullable();
            $table->text('description')->default('')->nullable();
            $table->text('code')->default('');
            $table->boolean('public')->default(1);

            $table->boolean('is_top')->default(0)->index();
            $table->boolean('is_valid')->default(1)->index();
            $table->integer('reply_count')->default(0)->index();
            $table->integer('view_count')->default(0)->index();
            $table->integer('favorite_count')->default(0)->index();
            $table->integer('vote_count')->default(0)->index();

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });

        factory(Ik47\Models\Gist::class, 50)->create([
            'user_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gists');
    }
}
