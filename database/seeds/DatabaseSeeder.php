<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each(function ($user) {
            
            $user->posts()->createMany(factory(App\Post::class, rand(1,10))->make()->toArray())->each(function ($post) {
                        
                $post->comments()->createMany(factory(App\Comment::class,rand(3,50))->make()->toArray());
            });
        });
    }
}
