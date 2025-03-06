<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostsTableSeeder extends Seeder
{
    public function run()
    {
        $blog_posts = [
            ['blogcat_id' => 1, 'post_title' => 'The Future of Web Development', 'post_slug' => 'future-of-web-development', 'post_image' => 'http://127.0.0.1:8000/upload/no_image.jpg', 'long_descp' => 'Exploring new trends in web development.'],
            ['blogcat_id' => 2, 'post_title' => 'Living a Balanced Life', 'post_slug' => 'living-a-balanced-life', 'post_image' => 'http://127.0.0.1:8000/upload/no_image.jpg', 'long_descp' => 'Tips for a balanced lifestyle.'],
            ['blogcat_id' => 3, 'post_title' => 'Building a Business from Scratch', 'post_slug' => 'building-a-business', 'post_image' => 'http://127.0.0.1:8000/upload/no_image.jpg', 'long_descp' => 'Starting your own business journey.'],
            ['blogcat_id' => 4, 'post_title' => 'Effective Marketing Strategies', 'post_slug' => 'effective-marketing-strategies', 'post_image' => 'http://127.0.0.1:8000/upload/no_image.jpg', 'long_descp' => 'Marketing tactics to grow your brand.'],
            ['blogcat_id' => 5, 'post_title' => 'Online Learning in 2025', 'post_slug' => 'online-learning-in-2025', 'post_image' => 'http://127.0.0.1:8000/upload/no_image.jpg', 'long_descp' => 'The evolution of online education.'],
        ];

        foreach ($blog_posts as $post) {
            BlogPost::create($post);
        }
    }
}