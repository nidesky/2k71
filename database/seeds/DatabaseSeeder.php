<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // 创建用户同时创建文章和代码
        factory(Ik47\Models\User::class, 3)
            ->create()
            ->each(function($u) {
                factory(Ik47\Models\Post::class, 5)->create([
                    'user_id' => $u->id
                ]);

                factory(Ik47\Models\Gist::class, 5)->create([
                    'user_id' => $u->id
                ]);
            });

        Model::reguard();
    }
}
