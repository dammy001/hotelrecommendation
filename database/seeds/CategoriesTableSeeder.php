<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'categories' => 'Popular'
            ],
            [
                'categories' => 'Recommended'
            ],
            [
                'categories' => 'Low Budget'
            ],
            [
                'categories' => 'Top'
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
