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
        for($i=0;$i <=10;$i++)
        {
            Category::create([
                'name' => 'Phòng đơn',
                'active' => true
            ]);
        }

    }
}
