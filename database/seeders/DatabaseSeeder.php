<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use App\Models\Player;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Database\Seeders\CompetitionSeeder;

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
        $this->call(CompetitionSeeder::class);
        $this->call(CountrySeeder::class);
        User::factory(10)->create();
        News::factory(10)->create();
        Player::factory(20)->create();
    }
}
