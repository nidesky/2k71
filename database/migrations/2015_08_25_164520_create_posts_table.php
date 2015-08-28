<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function($table)
        {
            $table->increments('id');
            $table->string('title', 50)->index();
            $table->text('description')->default('')->nullable();
            $table->text('body')->default('')->nullable();
            $table->string('author')->default('')->nullable();
            $table->boolean('public')->default(1);
            $table->string('link')->default('')->nullable();

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

        factory(Ik47\Models\Post::class, 50)->create([
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
        Schema::drop('posts');
    }
}
