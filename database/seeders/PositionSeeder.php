<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Records = [
            ['id' => 1, 'name' => 'Goalkeepers', 'slug' => 'goalkeepers'],
            ['id' => 2, 'name' => 'Defenders', 'slug' => 'defenders'],
            ['id' => 3, 'name' => 'Midfielders', 'slug' => 'midfielders'],
            ['id' => 4, 'name' => 'Forwards', 'slug' => 'forwards'],
            ['id' => 5, 'name' => 'Manager', 'slug' => 'manager'],
            ['id' => 6, 'name' => 'Physio', 'slug' => 'physio'],
        ];
        Position::insert($Records);
    }
}
