<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $subcategories = [
            // Web Development Subcategories
            ['category_id' => 1, 'subcategory_name' => 'Frontend', 'subcategory_slug' => 'frontend'],
            ['category_id' => 1, 'subcategory_name' => 'Backend', 'subcategory_slug' => 'backend'],
            ['category_id' => 1, 'subcategory_name' => 'Full Stack', 'subcategory_slug' => 'full-stack'],
            ['category_id' => 1, 'subcategory_name' => 'DevOps', 'subcategory_slug' => 'devops'],

            // Data Science Subcategories
            ['category_id' => 2, 'subcategory_name' => 'Python Programming', 'subcategory_slug' => 'python-programming'],
            ['category_id' => 2, 'subcategory_name' => 'Machine Learning', 'subcategory_slug' => 'machine-learning'],
            ['category_id' => 2, 'subcategory_name' => 'Big Data', 'subcategory_slug' => 'big-data'],
            ['category_id' => 2, 'subcategory_name' => 'Data Visualization', 'subcategory_slug' => 'data-visualization'],

            // Design Subcategories
            ['category_id' => 3, 'subcategory_name' => 'Graphic Design', 'subcategory_slug' => 'graphic-design'],
            ['category_id' => 3, 'subcategory_name' => '3D Design', 'subcategory_slug' => '3d-design'],
            ['category_id' => 3, 'subcategory_name' => 'UX/UI Design', 'subcategory_slug' => 'ux-ui-design'],
            ['category_id' => 3, 'subcategory_name' => 'Illustration', 'subcategory_slug' => 'illustration'],

            // Business Subcategories
            ['category_id' => 4, 'subcategory_name' => 'Entrepreneurship', 'subcategory_slug' => 'entrepreneurship'],
            ['category_id' => 4, 'subcategory_name' => 'Leadership', 'subcategory_slug' => 'leadership'],
            ['category_id' => 4, 'subcategory_name' => 'Project Management', 'subcategory_slug' => 'project-management'],
            ['category_id' => 4, 'subcategory_name' => 'Business Strategy', 'subcategory_slug' => 'business-strategy'],

            // Marketing Subcategories
            ['category_id' => 5, 'subcategory_name' => 'Digital Marketing', 'subcategory_slug' => 'digital-marketing'],
            ['category_id' => 5, 'subcategory_name' => 'Content Marketing', 'subcategory_slug' => 'content-marketing'],
            ['category_id' => 5, 'subcategory_name' => 'SEO', 'subcategory_slug' => 'seo'],
            ['category_id' => 5, 'subcategory_name' => 'Social Media', 'subcategory_slug' => 'social-media'],
        ];

        foreach ($subcategories as $subcategory) {
            SubCategory::firstOrCreate(
                ['subcategory_slug' => $subcategory['subcategory_slug']],
                $subcategory
            );
        }
    }
}