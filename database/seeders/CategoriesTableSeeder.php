<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $defaultImage = 'http://127.0.0.1:8000/upload/no_image.jpg';

        $categories = [
            ['category_name' => 'Web Development', 'category_slug' => 'web-development'],
            ['category_name' => 'Data Science', 'category_slug' => 'data-science'],
            ['category_name' => 'Design', 'category_slug' => 'design'],
            ['category_name' => 'Business', 'category_slug' => 'business'],
            ['category_name' => 'Marketing', 'category_slug' => 'marketing'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['category_slug' => $category['category_slug']],
                [
                    'category_name' => $category['category_name'],
                    'category_slug' => $category['category_slug'],
                    'image' => $defaultImage,
                ]
            );
        }
    }
}
