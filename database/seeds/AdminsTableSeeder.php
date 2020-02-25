<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'username' => 'admin@gmail.com',
                'password' => 'admin'
            ]
        ];

        foreach($admins as $admin){
            Admin::create($admin);
        }
    }
}
