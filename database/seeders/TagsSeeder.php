<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::upsert([
            ['name' => 'E/G', 'code' => 'CART001', 'status' => 1],
            ['name' => 'Lead Battery', 'code' => 'CART002', 'status' => 1],
            ['name' => 'Lithium', 'code' => 'CART003', 'status' => 1],
            ['name' => 'Capacity 4-5 People', 'code' => 'CART004', 'status' => 1],
            ['name' => 'Capacity 2 People', 'code' => 'CART005', 'status' => 1],
            ['name' => 'Capacity 1 Person', 'code' => 'CART006', 'status' => 1],
            ['name' => 'Popularity', 'code' => 'CART007', 'status' => 1],
            ['name' => '100,000 Yen OR Less', 'code' => 'CART008', 'status' => 1],
            ['name' => '300,000 Yen OR Less', 'code' => 'CART009', 'status' => 1],
            ['name' => '500,000 Yen OR Less', 'code' => 'CART010', 'status' => 1],
            ['name' => '700,000 Yen OR Less', 'code' => 'CART011', 'status' => 1],
        ], ['name'], ['status']);
    }
}
