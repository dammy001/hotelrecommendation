<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = [
            [
                'hotelname' => 'Sheraton Hotel',
                'location' => 'Ikeja',
                'address' => 'Lagos',
                'contact' => '08103843938',
                'roomtype' => 'Overnight',
                'price' => '60000',
                'rating' => '5',
                'description' => 'Sheraton is a wonderful hotel based in lagos with best facilities',
                'facilities' => 'Parking Space, Water, Electricity, Swimming pool, Bar, Air Condition, Resturant, Security, Internet',
                'Category' => 'Popular',
                'image' => 'sheraton.jpg',

            ],
            [
                'hotelname' => 'Oriental Hotel',
                'location' => 'Lekki',
                'address' => 'Lagos',
                'contact' => '08103843938',
                'roomtype' => 'Multi Days',
                'price' => '90000',
                'rating' => '5',
                'description' => 'Lagos Oriental Hotel is a 5-Star luxury hotel situated in-between the Lekki and Victoria Island areas of Lagos. Located at 3, Lekki Road, Victoria Island, the Lagos Oriental Hotel is within proximity of numerous business and tourist attractions.',
                'facilities' => 'Parking Space, Water,24 Electricity, Swimming pool, Bar, Air Condition, Resturant, Security, Internet',
                'Category' => 'Popular',
                'image' => 'oriental.jpg',

            ],
            [
                'hotelname' => 'Eko Hotel & Suites',
                'location' => 'Victoria Island',
                'address' => 'Lagos',
                'contact' => '08103843938',
                'roomtype' => 'Multi Days',
                'price' => '50000',
                'rating' => '5',
                'description' => 'Eko Hotel is a wonderful hotel based in lagos with best facilities',
                'facilities' => 'Parking Space, Water, Electricity, Swimming pool, Bar, Air Condition, Air Condition, Resturant, Security, Internet',
                'Category' => 'Popular',
                'image' => 'eko.jpg',

            ],
            [
                'hotelname' => 'Federal Palace Hotel',
                'location' => 'Victoria Island',
                'address' => 'Lagos',
                'contact' => '08103843938',
                'roomtype' => 'Multi Days',
                'price' => '50000',
                'rating' => '5',
                'description' => 'Federal Palace is a wonderful hotel based in lagos with best facilities',
                'facilities' => 'Parking Space, Water, Electricity, Swimming pool, Bar, Air Condition',
                'Category' => 'Popular',
                'image' => 'federalpalace.jpg',

            ],
            [
                'hotelname' => 'Radisson Blu Hotel',
                'location' => 'Ikeja',
                'address' => 'Lagos',
                'contact' => '08103843938',
                'roomtype' => 'Multi Days',
                'price' => '400000',
                'rating' => '5',
                'description' => 'Radisson Blu is a wonderful hotel based in lagos with best facilities',
                'facilities' => 'Parking Space, Water, Electricity, Swimming pool, Bar, Air Condition',
                'Category' => 'Popular',
                'image' => 'radison.jpg',

            ],
            [
                'hotelname' => 'The George',
                'location' => 'Ikoyi',
                'address' => 'Lagos',
                'contact' => '08103843938',
                'roomtype' => 'Multi Days',
                'price' => '60000',
                'rating' => '5',
                'description' => 'Eko Hotel is a wonderful hotel based in lagos with best facilities',
                'facilities' => 'Parking Space, Water, Electricity, Swimming pool, Bar, Air Condition',
                'Category' => 'Popular',
                'image' => 'george.jpg',

            ],
            [
                'hotelname' => 'Southern Sun',
                'location' => 'Ikoyi',
                'address' => 'Lagos',
                'contact' => '08103843938',
                'roomtype' => 'Multi Days',
                'price' => '60000',
                'rating' => '5',
                'description' => 'Southern Sun is a wonderful hotel based in lagos with best facilities',
                'facilities' => 'Parking Space, Water, Electricity, Swimming pool, Bar, Air Condition',
                'Category' => 'Popular',
                'image' => 'southern.jpg',

            ],
            [
                'hotelname' => 'De Rigg Place',
                'location' => 'Surulere',
                'address' => 'Lagos',
                'contact' => '08103843938',
                'roomtype' => 'Multi Days',
                'price' => '60000',
                'rating' => '4',
                'description' => 'Eko Hotel is a wonderful hotel based in lagos with best facilities',
                'facilities' => 'Parking Space, Water, Electricity, Swimming pool, Bar, Air Condition',
                'Category' => 'Popular',
                'image' => 'derigg.jpg',

            ],


        ];

        foreach($hotels as $hotel){
            Hotel::create($hotel);
        }
    }
}
