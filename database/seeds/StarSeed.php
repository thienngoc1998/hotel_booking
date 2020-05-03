<?php

use Illuminate\Database\Seeder;

class StarSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('stars')->insert([
            'star' => '1',
            'id_room' => 1,
            'id_user' => 1,
        ]);

        \Illuminate\Support\Facades\DB::table('stars')->insert([
            'star' => '2',
            'id_room' => 2,
            'id_user' => 2,
        ]);

        \Illuminate\Support\Facades\DB::table('stars')->insert([
            'star' => '3',
            'id_room' => 3,
            'id_user' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('stars')->insert([
            'star' => '4',
            'id_room' => 4,
            'id_user' => 2,
        ]);

    }
}
