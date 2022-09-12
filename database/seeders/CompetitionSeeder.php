<?php

namespace Database\Seeders;

use App\Models\Competition;
use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Records = [
            ['id' => 1, 'name' => 'League', 'slug' => 'league'],
            ['id' => 2, 'name' => 'Cup', 'slug' => 'cup'],
            ['id' => 3, 'name' => 'Friendly', 'slug' => 'friendly'],
        ];
        Competition::insert($Records);
    }
}
