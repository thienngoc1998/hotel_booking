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
            'role' => 0 ,
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        for ($i = 1; $i<= 3 ;$i++)
        {
            \Illuminate\Support\Facades\DB::table('admins')->insert([
                'name' => 'admin'.$i,
                'phone' => '0976801728',
                'email' => 'admin'.$i.'@admin.com',
                'role' => $i ,
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
