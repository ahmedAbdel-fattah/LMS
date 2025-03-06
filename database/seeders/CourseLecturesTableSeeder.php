<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseLecture;

class CourseLecturesTableSeeder extends Seeder
{
    public function run()
    {
        $lectures = [
            // Web Development Courses
            ['course_id' => 1, 'section_id' => 1, 'lecture_title' => 'Introduction to HTML'],
            ['course_id' => 1, 'section_id' => 2, 'lecture_title' => 'Understanding CSS Basics'],
            ['course_id' => 1, 'section_id' => 3, 'lecture_title' => 'JavaScript Variables and Functions'],
            ['course_id' => 2, 'section_id' => 4, 'lecture_title' => 'Setting Up Your Node.js Environment'],
            ['course_id' => 2, 'section_id' => 5, 'lecture_title' => 'Building Your First API with Express.js'],
            ['course_id' => 2, 'section_id' => 6, 'lecture_title' => 'Working with MongoDB in Node.js'],
            ['course_id' => 3, 'section_id' => 7, 'lecture_title' => 'Integrating Frontend with Backend'],
            ['course_id' => 3, 'section_id' => 8, 'lecture_title' => 'Working with REST APIs'],
            ['course_id' => 3, 'section_id' => 9, 'lecture_title' => 'Full Stack Project Structure'],
            ['course_id' => 4, 'section_id' => 10, 'lecture_title' => 'Continuous Integration with Jenkins'],
            ['course_id' => 4, 'section_id' => 11, 'lecture_title' => 'Version Control with Git and GitHub'],
            ['course_id' => 4, 'section_id' => 12, 'lecture_title' => 'Automating Deployments with Jenkins'],
            ['course_id' => 5, 'section_id' => 13, 'lecture_title' => 'Introduction to Python Programming'],
            ['course_id' => 5, 'section_id' => 14, 'lecture_title' => 'Python Data Types and Variables'],
            ['course_id' => 5, 'section_id' => 15, 'lecture_title' => 'Loops and Conditional Statements'],

            // Data Science Courses
            ['course_id' => 6, 'section_id' => 16, 'lecture_title' => 'Python Basics for Data Science'],
            ['course_id' => 6, 'section_id' => 17, 'lecture_title' => 'Working with Pandas DataFrames'],
            ['course_id' => 6, 'section_id' => 18, 'lecture_title' => 'Creating Data Visualizations with Matplotlib'],
            ['course_id' => 7, 'section_id' => 19, 'lecture_title' => 'Supervised vs Unsupervised Learning'],
            ['course_id' => 7, 'section_id' => 20, 'lecture_title' => 'Regression and Classification Algorithms'],
            ['course_id' => 7, 'section_id' => 21, 'lecture_title' => 'Clustering Algorithms in Python'],
            ['course_id' => 8, 'section_id' => 22, 'lecture_title' => 'Introduction to Big Data'],
            ['course_id' => 8, 'section_id' => 23, 'lecture_title' => 'Exploring Hadoop Ecosystem'],
            ['course_id' => 8, 'section_id' => 24, 'lecture_title' => 'Data Processing with Apache Spark'],
            ['course_id' => 9, 'section_id' => 25, 'lecture_title' => 'Understanding Data Visualization Principles'],
            ['course_id' => 9, 'section_id' => 26, 'lecture_title' => 'Creating Interactive Dashboards with Plotly'],
            ['course_id' => 9, 'section_id' => 27, 'lecture_title' => 'Advanced Visualization with Seaborn'],

            // Design Courses
            ['course_id' => 10, 'section_id' => 28, 'lecture_title' => 'Introduction to Graphic Design'],
            ['course_id' => 10, 'section_id' => 29, 'lecture_title' => 'Designing Logos and Branding'],
            ['course_id' => 10, 'section_id' => 30, 'lecture_title' => 'Typography and Layout Design'],
            ['course_id' => 11, 'section_id' => 31, 'lecture_title' => '3D Modeling with Blender'],
            ['course_id' => 11, 'section_id' => 32, 'lecture_title' => 'Texturing in 3D Design'],
            ['course_id' => 11, 'section_id' => 33, 'lecture_title' => 'Lighting and Rendering 3D Models'],
            ['course_id' => 12, 'section_id' => 34, 'lecture_title' => 'User Research and Persona Creation'],
            ['course_id' => 12, 'section_id' => 35, 'lecture_title' => 'Creating Wireframes and Prototypes'],
            ['course_id' => 12, 'section_id' => 36, 'lecture_title' => 'Usability Testing and Feedback'],
            ['course_id' => 13, 'section_id' => 37, 'lecture_title' => 'Sketching and Drawing Fundamentals'],
            ['course_id' => 13, 'section_id' => 38, 'lecture_title' => 'Digital Illustration with Photoshop'],
            ['course_id' => 13, 'section_id' => 39, 'lecture_title' => 'Advanced Illustration Techniques'],

            // Business Courses
            ['course_id' => 14, 'section_id' => 40, 'lecture_title' => 'Starting Your Own Business'],
            ['course_id' => 14, 'section_id' => 41, 'lecture_title' => 'Finding and Securing Funding'],
            ['course_id' => 14, 'section_id' => 42, 'lecture_title' => 'Building a Solid Business Plan'],
            ['course_id' => 15, 'section_id' => 43, 'lecture_title' => 'Becoming a Great Leader'],
            ['course_id' => 15, 'section_id' => 44, 'lecture_title' => 'Managing Teams and Delegating'],
            ['course_id' => 15, 'section_id' => 45, 'lecture_title' => 'Effective Communication Skills for Leaders'],
            ['course_id' => 16, 'section_id' => 46, 'lecture_title' => 'Introduction to Project Management'],
            ['course_id' => 16, 'section_id' => 47, 'lecture_title' => 'Creating a Project Timeline'],
            ['course_id' => 16, 'section_id' => 48, 'lecture_title' => 'Managing Project Risks'],
            ['course_id' => 17, 'section_id' => 49, 'lecture_title' => 'Analyzing Business Data'],
            ['course_id' => 17, 'section_id' => 50, 'lecture_title' => 'Developing a Business Strategy'],
            ['course_id' => 17, 'section_id' => 51, 'lecture_title' => 'Implementing Your Business Plan'],

            // Marketing Courses
            ['course_id' => 18, 'section_id' => 52, 'lecture_title' => 'Building a Digital Marketing Strategy'],
            ['course_id' => 18, 'section_id' => 53, 'lecture_title' => 'Understanding Search Engine Marketing (SEM)'],
            ['course_id' => 18, 'section_id' => 54, 'lecture_title' => 'Social Media Marketing Essentials'],
            ['course_id' => 19, 'section_id' => 55, 'lecture_title' => 'Creating Engaging Content for Websites'],
            ['course_id' => 19, 'section_id' => 56, 'lecture_title' => 'Understanding Content Marketing Metrics'],
            ['course_id' => 19, 'section_id' => 57, 'lecture_title' => 'Advanced Content Marketing Strategies'],
            ['course_id' => 20, 'section_id' => 58, 'lecture_title' => 'SEO Fundamentals and Basics'],
            ['course_id' => 20, 'section_id' => 59, 'lecture_title' => 'Keyword Research and Analysis'],
            ['course_id' => 20, 'section_id' => 60, 'lecture_title' => 'On-Page Optimization Techniques'],
            ['course_id' => 21, 'section_id' => 61, 'lecture_title' => 'Building Social Media Campaigns'],
            ['course_id' => 21, 'section_id' => 62, 'lecture_title' => 'Understanding Analytics in Social Media'],
            ['course_id' => 21, 'section_id' => 63, 'lecture_title' => 'Engaging Your Audience on Social Platforms'],
        ];

        foreach ($lectures as $lecture) {
            CourseLecture::create($lecture);
        }
    }
}