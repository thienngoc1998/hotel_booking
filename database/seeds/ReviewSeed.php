<?php

use Illuminate\Database\Seeder;

class ReviewSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <= 9 ; $i++)
        {
            \Illuminate\Support\Facades\DB::table('reviews')->insert([
                'content' => 'Hay qua by user'.$i,
                'id_user' => 1,
                'id_room' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
