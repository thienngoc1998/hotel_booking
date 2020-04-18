<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Phòng đơn',
            'active' => false
        ]);
        Category::create([
            'name' => 'Phòng đôi',
            'active' => true
        ]);
        Category::create([
            'name' => 'Phòng Studio',
            'active' => true
        ]);
        Category::create([
            'name' => 'Phòng cỡ lớn',
            'active' => true
        ]);
        Category::create([
            'name' => 'Phòng tổng thống',
            'active' => true
        ]);
        Category::create([
            'name' => 'Phòng Murphy',
            'active' => true
        ]);
        Category::create([
            'name' => 'Phòng họp',
            'active' => true
        ]);
    }
}
