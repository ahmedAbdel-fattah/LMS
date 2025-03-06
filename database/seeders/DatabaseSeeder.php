<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionTableSeeder::class,       // Seeder for permissions
            UserTableSeeder::class,              // Seeder for users
            SmtpSettingsTableSeeder::class,     // Seeder for SMTP settings
            SiteSettingsTableSeeder::class,     // Seeder for site settings
            CategoriesTableSeeder::class,       // Seeder for categories
            SubCategoriesTableSeeder::class,    // Seeder for subcategories
            CoursesTableSeeder::class,          // Seeder for courses (make sure this runs first)
            CourseGoalsTableSeeder::class,      // Seeder for course goals
            CourseSectionsTableSeeder::class,   // Seeder for course sections
            CourseLecturesTableSeeder::class,   // Seeder for course lectures
            QuestionsTableSeeder::class,        // Seeder for questions
            ReviewsTableSeeder::class,          // Seeder for reviews (should run after courses)
            BlogCategoriesTableSeeder::class,   // Seeder for blog categories
            BlogPostsTableSeeder::class,        // Seeder for blog posts
            AboutAreaSeeder::class,
            FeatureSeeder::class,
        ]);
    }
}