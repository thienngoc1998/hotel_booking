<?php

use Illuminate\Database\Seeder;

class RoomSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('rooms')->insert([
            'name' => 'STANDARD SUITE',
            'avatar' => 'grid1.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis',
            'amount_bed' => 3,
            'id_cate' => 1,
        ]);
        \Illuminate\Support\Facades\DB::table('rooms')->insert([
            'name' => 'DELUXE SUITE',
            'avatar' => 'grid2.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis',
            'amount_bed' => 3,
            'id_cate' => 1,
        ]);
        \Illuminate\Support\Facades\DB::table('rooms')->insert([
            'name' => 'SUPERIOR SUITE',
            'avatar' => 'grid3.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis',
            'amount_bed' => 3,
            'id_cate' => 1,
        ]);
        \Illuminate\Support\Facades\DB::table('rooms')->insert([
            'name' => 'NORMAL SUITE',
            'avatar' => 'grid4.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis',
            'amount_bed' => 3,
            'id_cate' => 1,
        ]);
        \Illuminate\Support\Facades\DB::table('rooms')->insert([
            'name' => 'ROYAL SUITE',
            'avatar' => 'grid5.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis',
            'amount_bed' => 3,
            'id_cate' => 1,
        ]);
    }
}
