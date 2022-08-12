<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\News;
use App\Models\Player;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        $this->call(PositionSeeder::class);
        $this->call(CategorySeeder::class);
        User::factory(10)->create();
        News::factory(10)->create();
        Player::factory(20)->create();
        Comment::factory(10)->create();
    }
}
