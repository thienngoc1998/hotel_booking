<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admins')->insert([
            'name' => 'admin',
            'phone' => '0976801728',
            'email' => 'admin@admin.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
