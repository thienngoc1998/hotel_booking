<?php


use App\Star;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeed::class);
        $this->call(AdminSeed::class);
         $this->call(ServiceSeed::class);
        $this->call(RoomSeed::class);
        $this->call(UserSeed::class);
        $this->call(ReviewSeed::class);
        $this->call(StarSeed::class);


    }
}
