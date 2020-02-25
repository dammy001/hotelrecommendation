<?php

use Illuminate\Database\Seeder;
use App\PopularLocation;

class PopularLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $popularLocation = [
            [
                'location' => 'Ikeja'
            ],
            [
                'location' => 'Lekki'
            ],
            [
                'location' => 'Victoria Island'
            ],
            [
                'location' => 'Surulere'
            ],
        ];

        foreach($popularLocation as $location){
            PopularLocation::create($location);
        }
    }
}
