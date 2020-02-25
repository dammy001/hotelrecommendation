<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Classic King Room',
                'guest' => '2',
                'facilities' => 'free Wifi',
                'price' => '59000',
                'image' => 'oriental.jpg'
            ],
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Classic Twin Room',
                'guest' => '2',
                'facilities' => 'free Wifi',
                'price' => '65000',
                'image' => 'orientalroom.jpg'
            ],
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Classic Superior Room',
                'guest' => '4',
                'facilities' => 'free Wifi',
                'price' => '75000',
                'image' => 'oriental.jpg'
            ],
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Classic Deluxe',
                'guest' => '4',
                'facilities' => 'free Wifi',
                'price' => '115000',
                'image' => 'orientalroom.jpg'
            ],
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Junior Suite',
                'guest' => '6',
                'facilities' => 'free Wifi',
                'price' => '172000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Executive Junior Suite',
                'guest' => '7',
                'facilities' => 'free Wifi',
                'price' => '230000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Business Suite',
                'guest' => '5',
                'facilities' => 'free Wifi',
                'price' => '288000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Ambassador Suite',
                'guest' => '7',
                'facilities' => 'free Wifi',
                'price' => '438000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Oriental Hotel',
                'roomname' => 'Presidential Suite',
                'guest' => '7',
                'facilities' => 'free Wifi',
                'price' => '460000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Sheraton Hotel',
                'roomname' => 'Standard Room, 1 King bed, Pool Access',
                'guest' => '3',
                'facilities' => 'free Wifi',
                'price' => '100000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Sheraton Hotel',
                'roomname' => 'Twin Room, 2 Twin beds',
                'guest' => '4',
                'facilities' => 'free Wifi, Breakfast',
                'price' => '150000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Sheraton Hotel',
                'roomname' => 'Club Room',
                'guest' => '3',
                'facilities' => 'free Wifi',
                'price' => '130000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Sheraton Hotel',
                'roomname' => 'Business Suite',
                'guest' => '5',
                'facilities' => 'free Wifi, breakfast',
                'price' => '200000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Sheraton Hotel',
                'roomname' => 'Junior Suite',
                'guest' => '6',
                'facilities' => 'free Wifi',
                'price' => '180000',
                'image' => 'juniorsuite.jpg'
            ],
            [
                'hotelname' => 'Sheraton Hotel',
                'roomname' => 'Presidential Suite',
                'guest' => '7',
                'facilities' => 'free Wifi, pool, food',
                'price' => '500000',
                'image' => 'juniorsuite.jpg'
            ],
        ];

        foreach($rooms as $room){
            Room::create($room);
        }
    }
}
