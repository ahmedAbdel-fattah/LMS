<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course_goal;  // Use the correct model name

class CourseGoalsTableSeeder extends Seeder
{
    public function run()
    {
        $goals = [
            // Web Development Courses
            ['course_id' => 1, 'goal_name' => 'Master HTML, CSS, and JavaScript for frontend development'],
            ['course_id' => 2, 'goal_name' => 'Build server-side applications with Node.js and Express'],
            ['course_id' => 3, 'goal_name' => 'Understand Python programming concepts and full-stack development'],
            ['course_id' => 4, 'goal_name' => 'Learn data preprocessing, CI/CD, and model training'],
            ['course_id' => 5, 'goal_name' => 'Design user-centered applications and prototypes'],

            // Data Science Courses
            ['course_id' => 6, 'goal_name' => 'Learn Python basics and libraries for Data Science'],
            ['course_id' => 7, 'goal_name' => 'Build and implement machine learning models'],
            ['course_id' => 8, 'goal_name' => 'Analyze and process large datasets with Big Data tools'],
            ['course_id' => 9, 'goal_name' => 'Create insightful data visualizations using Python libraries'],

            // Design Courses
            ['course_id' => 10, 'goal_name' => 'Understand graphic design principles and create stunning visuals'],
            ['course_id' => 11, 'goal_name' => 'Learn 3D modeling, rendering, and animation techniques'],
            ['course_id' => 12, 'goal_name' => 'Design intuitive and engaging user experiences'],
            ['course_id' => 13, 'goal_name' => 'Create digital and hand-drawn illustrations with various tools'],

            // Business Courses
            ['course_id' => 14, 'goal_name' => 'Build a successful business with effective planning and execution'],
            ['course_id' => 15, 'goal_name' => 'Develop leadership skills for effective team management'],
            ['course_id' => 16, 'goal_name' => 'Manage projects successfully with project management tools'],
            ['course_id' => 17, 'goal_name' => 'Create strategic business plans for long-term success'],

            // Marketing Courses
            ['course_id' => 18, 'goal_name' => 'Master digital marketing strategies to reach global audiences'],
            ['course_id' => 19, 'goal_name' => 'Create compelling and engaging content marketing campaigns'],
            ['course_id' => 20, 'goal_name' => 'Optimize websites for better search engine ranking'],
            ['course_id' => 21, 'goal_name' => 'Build brand awareness through effective social media marketing'],
        ];

        foreach ($goals as $goal) {
            Course_goal::create($goal);  // Using CourseGoal model here
        }
    }
}
