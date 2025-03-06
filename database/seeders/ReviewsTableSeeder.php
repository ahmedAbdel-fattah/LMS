<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Course; // Import the Course model

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        // Define reviews
        $reviews = [
            // Web Development Courses
            ['course_id' => 1, 'user_id' => 1, 'rating' => 5, 'comment' => 'Great course! Very comprehensive and well-organized.'],
            ['course_id' => 2, 'user_id' => 2, 'rating' => 4, 'comment' => 'Very informative. The content is great, but more examples would be helpful.'],
            ['course_id' => 3, 'user_id' => 3, 'rating' => 5, 'comment' => 'Learned a lot! Excellent balance between theory and practical application.'],
            ['course_id' => 4, 'user_id' => 4, 'rating' => 3, 'comment' => 'Good course, but needs more examples and detailed explanations on some topics.'],
            ['course_id' => 5, 'user_id' => 5, 'rating' => 5, 'comment' => 'Highly recommend this course! The instructor was clear and the content was engaging.'],

            // Data Science Courses
            ['course_id' => 6, 'user_id' => 6, 'rating' => 4, 'comment' => 'Good intro to Python, but I would have liked more hands-on projects.'],
            ['course_id' => 7, 'user_id' => 7, 'rating' => 5, 'comment' => 'The machine learning concepts were explained very well. A great learning experience!'],
            ['course_id' => 8, 'user_id' => 8, 'rating' => 4, 'comment' => 'Big Data analytics is a fascinating subject, but it could use more practical examples.'],
            ['course_id' => 9, 'user_id' => 9, 'rating' => 5, 'comment' => 'This course provided great insights into data visualization. Highly recommended!'],

            // Design Courses
            ['course_id' => 10, 'user_id' => 10, 'rating' => 5, 'comment' => 'Amazing course! The concepts and examples were extremely useful for my design work.'],
            ['course_id' => 11, 'user_id' => 11, 'rating' => 4, 'comment' => 'The 3D design part was great. I wish the animation section was more in-depth.'],
            ['course_id' => 12, 'user_id' => 12, 'rating' => 5, 'comment' => 'This course taught me a lot about UX/UI principles. Excellent material!'],
            ['course_id' => 13, 'user_id' => 13, 'rating' => 4, 'comment' => 'I loved the illustration techniques shared here. Some sections felt rushed, though.'],

            // Business Courses
            ['course_id' => 14, 'user_id' => 14, 'rating' => 5, 'comment' => 'A must-take course for entrepreneurs! It gave me a great start for my business journey.'],
            ['course_id' => 15, 'user_id' => 15, 'rating' => 4, 'comment' => 'Very informative course. Some of the leadership examples could have been more relatable.'],
            ['course_id' => 16, 'user_id' => 16, 'rating' => 5, 'comment' => 'I learned a lot about project management tools and techniques. Really enjoyed it.'],
            ['course_id' => 17, 'user_id' => 17, 'rating' => 4, 'comment' => 'Solid course on business strategy. I would have liked more case studies.'],

            // Marketing Courses
            ['course_id' => 18, 'user_id' => 18, 'rating' => 5, 'comment' => 'This course was fantastic for learning digital marketing basics. Highly recommended!'],
            ['course_id' => 19, 'user_id' => 19, 'rating' => 4, 'comment' => 'Great content on content marketing. Would love more focus on SEO integration.'],
            ['course_id' => 20, 'user_id' => 20, 'rating' => 5, 'comment' => 'SEO optimization was covered in detail. Great course!'],
        ];

        // Check if courses exist before seeding reviews
        foreach ($reviews as $review) {
            if (Course::find($review['course_id'])) {
                Review::firstOrCreate(
                    ['course_id' => $review['course_id'], 'user_id' => $review['user_id']],
                    $review
                );
            } else {
                echo "Course ID " . $review['course_id'] . " does not exist. Skipping review for user " . $review['user_id'] . "\n";
            }
        }
    }
}
