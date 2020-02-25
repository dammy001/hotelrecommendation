<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Hotel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategoriesTableSeeder::class);
         $this->call(HotelsTableSeeder::class);
         $this->call(RoomsTableSeeder::class);
         $this->call(PopularLocationsSeeder::class);
         $this->call(AdminsTableSeeder::class);
    }
}
