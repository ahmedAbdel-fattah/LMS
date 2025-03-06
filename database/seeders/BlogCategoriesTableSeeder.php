<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $blog_categories = [
            ['category_name' => 'Tech', 'category_slug' => 'tech'],
            ['category_name' => 'Lifestyle', 'category_slug' => 'lifestyle'],
            ['category_name' => 'Business', 'category_slug' => 'business'],
            ['category_name' => 'Marketing', 'category_slug' => 'marketing'],
            ['category_name' => 'Education', 'category_slug' => 'education'],
        ];

        foreach ($blog_categories as $category) {
            BlogCategory::create($category);
        }
    }
}
