<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\News;
use App\Models\Player;
use App\Models\User;
use Database\Seeders\PositionSeeder;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(PositionSeeder::class);
        User::factory(10)->create();
        News::factory(10)->create();
        Player::factory(20)->create();
        Comment::factory(10)->create();
    }
}
