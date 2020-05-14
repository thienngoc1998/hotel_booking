<?php

use Illuminate\Database\Seeder;

class ServiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'name' => 'CLUB Thể Hình',
            'content' => 'CLUB Thể Hình',
            'open_time' => '16:00',
            'close_time' => '23:00',
            'price' => '50000',
        ]);
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'name' => 'Xông hơi',
            'content' => 'CLUB Thể Hình',
            'open_time' => '16:00',
            'close_time' => '20:00',
            'price' => '50000',
        ]);
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'name' => 'Leo núi',
            'content' => 'CLUB Thể Hình',
            'price' => '50000',
        ]);
        \Illuminate\Support\Facades\DB::table('services')->insert([
            'name' => 'Nhà hàng',
            'content' => 'CLUB Thể Hình',
            'open_time' => '7:00',
            'close_time' => '23:00',
            'price' => '50000',
        ]);
    }
}
