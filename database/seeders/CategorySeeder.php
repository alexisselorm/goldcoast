<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Records = [
            ['id' => 1, 'name' => 'Transfer News', 'slug' => 'transfer'],
            ['id' => 2, 'name' => 'Match News', 'slug' => 'matchnews'],
            ['id' => 3, 'name' => 'Interviews', 'slug' => 'interviews'],
            ['id' => 4, 'name' => 'Club News', 'slug' => 'clubinews'],
            ['id' => 5, 'name' => 'Training', 'slug' => 'training'],
            ['id' => 6, 'name' => 'Match Preview', 'slug' => 'match-previews'],
        ];
        Category::insert($Records);
    }
}
