<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <= 10 ; $i++)
        {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'name' => 'user'.$i,
                'phone' => '0998978979'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
