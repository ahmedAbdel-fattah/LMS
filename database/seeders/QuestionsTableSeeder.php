<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // Web Development Courses
            ['course_id' => 1, 'user_id' => 1, 'instructor_id' => 1, 'subject' => 'How to structure a website?', 'question' => 'Can you explain the basics of structuring a website?'],
            ['course_id' => 2, 'user_id' => 2, 'instructor_id' => 2, 'subject' => 'Node.js error handling', 'question' => 'How do I handle errors in Node.js?'],
            ['course_id' => 3, 'user_id' => 3, 'instructor_id' => 3, 'subject' => 'Frontend and Backend Integration', 'question' => 'How do I integrate frontend with backend in full-stack development?'],
            ['course_id' => 4, 'user_id' => 4, 'instructor_id' => 4, 'subject' => 'CI/CD Practices', 'question' => 'What tools are best for continuous integration and delivery?'],
            ['course_id' => 5, 'user_id' => 5, 'instructor_id' => 5, 'subject' => 'Python programming', 'question' => 'How can I use Python for web development?'],

            // Data Science Courses
            ['course_id' => 6, 'user_id' => 6, 'instructor_id' => 6, 'subject' => 'Data visualization', 'question' => 'What are the best libraries for data visualization in Python?'],
            ['course_id' => 7, 'user_id' => 7, 'instructor_id' => 7, 'subject' => 'Machine Learning Models', 'question' => 'Can you explain the difference between supervised and unsupervised learning?'],
            ['course_id' => 8, 'user_id' => 8, 'instructor_id' => 8, 'subject' => 'Big Data', 'question' => 'What is the best approach for processing large datasets?'],
            ['course_id' => 9, 'user_id' => 9, 'instructor_id' => 9, 'subject' => 'Machine Learning Optimization', 'question' => 'What are the best practices for optimizing machine learning models?'],

            // Design Courses
            ['course_id' => 10, 'user_id' => 10, 'instructor_id' => 10, 'subject' => 'Design Tools', 'question' => 'What are the top tools for graphic design?'],
            ['course_id' => 11, 'user_id' => 11, 'instructor_id' => 11, 'subject' => '3D Modeling', 'question' => 'How can I start creating 3D models using Blender?'],
            ['course_id' => 12, 'user_id' => 12, 'instructor_id' => 12, 'subject' => 'User Experience Design', 'question' => 'What are the core principles of UX design?'],
            ['course_id' => 13, 'user_id' => 13, 'instructor_id' => 13, 'subject' => 'Illustration Techniques', 'question' => 'What are the essential techniques for digital illustration?'],

            // Business Courses
            ['course_id' => 14, 'user_id' => 14, 'instructor_id' => 14, 'subject' => 'Starting a Business', 'question' => 'What are the first steps to take when starting a business?'],
            ['course_id' => 15, 'user_id' => 15, 'instructor_id' => 15, 'subject' => 'Leadership Skills', 'question' => 'How can I develop strong leadership skills in my business?'],
            ['course_id' => 16, 'user_id' => 16, 'instructor_id' => 16, 'subject' => 'Project Management', 'question' => 'What are the key tools for project management?'],
            ['course_id' => 17, 'user_id' => 17, 'instructor_id' => 17, 'subject' => 'Business Strategy', 'question' => 'How can I create an effective business strategy?'],

            // Marketing Courses
            ['course_id' => 18, 'user_id' => 18, 'instructor_id' => 18, 'subject' => 'Digital Marketing', 'question' => 'What are the most effective digital marketing strategies?'],
            ['course_id' => 19, 'user_id' => 19, 'instructor_id' => 19, 'subject' => 'Content Marketing', 'question' => 'What are some best practices for creating compelling content?'],
            ['course_id' => 20, 'user_id' => 20, 'instructor_id' => 20, 'subject' => 'SEO Optimization', 'question' => 'How do I improve my website’s search engine ranking?'],
            ['course_id' => 21, 'user_id' => 21, 'instructor_id' => 21, 'subject' => 'Social Media Marketing', 'question' => 'What are the most effective platforms for social media marketing?'],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
