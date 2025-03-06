<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseSection;

class CourseSectionsTableSeeder extends Seeder
{
    public function run()
    {
        $sections = [
            // Web Development Courses
            ['course_id' => 1, 'section_title' => 'HTML Basics'],
            ['course_id' => 1, 'section_title' => 'CSS Styling'],
            ['course_id' => 1, 'section_title' => 'JavaScript Fundamentals'],
            ['course_id' => 2, 'section_title' => 'Node.js Setup'],
            ['course_id' => 2, 'section_title' => 'Understanding Express.js'],
            ['course_id' => 2, 'section_title' => 'Building RESTful APIs'],
            ['course_id' => 3, 'section_title' => 'Frontend and Backend Integration'],
            ['course_id' => 3, 'section_title' => 'API Integration with JavaScript'],
            ['course_id' => 3, 'section_title' => 'Full Stack Development Project'],
            ['course_id' => 4, 'section_title' => 'CI/CD Practices'],
            ['course_id' => 4, 'section_title' => 'Version Control with Git'],
            ['course_id' => 4, 'section_title' => 'Automating Deployments with Jenkins'],
            ['course_id' => 5, 'section_title' => 'Intro to Python'],
            ['course_id' => 5, 'section_title' => 'Data Types and Variables in Python'],
            ['course_id' => 5, 'section_title' => 'Control Flow in Python'],

            // Data Science Courses
            ['course_id' => 6, 'section_title' => 'Intro to Python Programming'],
            ['course_id' => 6, 'section_title' => 'Data Analysis with Pandas'],
            ['course_id' => 6, 'section_title' => 'Data Visualization with Matplotlib'],
            ['course_id' => 7, 'section_title' => 'Machine Learning Basics'],
            ['course_id' => 7, 'section_title' => 'Supervised Learning'],
            ['course_id' => 7, 'section_title' => 'Unsupervised Learning'],
            ['course_id' => 8, 'section_title' => 'Big Data Fundamentals'],
            ['course_id' => 8, 'section_title' => 'Hadoop Ecosystem Overview'],
            ['course_id' => 8, 'section_title' => 'Data Processing with Spark'],
            ['course_id' => 9, 'section_title' => 'Data Visualization Principles'],
            ['course_id' => 9, 'section_title' => 'Creating Interactive Dashboards'],
            ['course_id' => 9, 'section_title' => 'Advanced Data Visualization with Seaborn'],

            // Design Courses
            ['course_id' => 10, 'section_title' => 'Introduction to Graphic Design'],
            ['course_id' => 10, 'section_title' => 'Designing Logos and Branding'],
            ['course_id' => 10, 'section_title' => 'Design Principles and Layout'],
            ['course_id' => 11, 'section_title' => '3D Modeling Fundamentals'],
            ['course_id' => 11, 'section_title' => 'Texturing and Rendering'],
            ['course_id' => 11, 'section_title' => 'Animating 3D Objects'],
            ['course_id' => 12, 'section_title' => 'User Experience Design Basics'],
            ['course_id' => 12, 'section_title' => 'Creating Wireframes and Prototypes'],
            ['course_id' => 12, 'section_title' => 'Conducting User Research'],
            ['course_id' => 13, 'section_title' => 'Digital Illustration Basics'],
            ['course_id' => 13, 'section_title' => 'Sketching and Drawing Techniques'],
            ['course_id' => 13, 'section_title' => 'Advanced Illustration Tools'],

            // Business Courses
            ['course_id' => 14, 'section_title' => 'Entrepreneurship Essentials'],
            ['course_id' => 14, 'section_title' => 'Business Planning and Strategy'],
            ['course_id' => 14, 'section_title' => 'Raising Capital for Startups'],
            ['course_id' => 15, 'section_title' => 'Leadership Fundamentals'],
            ['course_id' => 15, 'section_title' => 'Team Building and Management'],
            ['course_id' => 15, 'section_title' => 'Effective Communication for Leaders'],
            ['course_id' => 16, 'section_title' => 'Project Management Basics'],
            ['course_id' => 16, 'section_title' => 'Agile and Scrum Methodology'],
            ['course_id' => 16, 'section_title' => 'Risk Management and Quality Control'],
            ['course_id' => 17, 'section_title' => 'Creating Business Strategies'],
            ['course_id' => 17, 'section_title' => 'Analyzing Market Trends'],
            ['course_id' => 17, 'section_title' => 'Competitive Analysis and Positioning'],

            // Marketing Courses
            ['course_id' => 18, 'section_title' => 'Digital Marketing Strategy'],
            ['course_id' => 18, 'section_title' => 'Content Marketing and SEO'],
            ['course_id' => 18, 'section_title' => 'Social Media Marketing'],
            ['course_id' => 19, 'section_title' => 'Content Creation Techniques'],
            ['course_id' => 19, 'section_title' => 'Writing for the Web'],
            ['course_id' => 19, 'section_title' => 'Content Marketing Tools'],
            ['course_id' => 20, 'section_title' => 'SEO Fundamentals'],
            ['course_id' => 20, 'section_title' => 'On-Page SEO Techniques'],
            ['course_id' => 20, 'section_title' => 'Off-Page SEO and Link Building'],
            ['course_id' => 21, 'section_title' => 'Social Media Marketing Basics'],
            ['course_id' => 21, 'section_title' => 'Paid Advertising on Social Platforms'],
            ['course_id' => 21, 'section_title' => 'Creating Engaging Social Content'],
        ];

        foreach ($sections as $section) {
            CourseSection::firstOrCreate(
                ['section_title' => $section['section_title']],
                $section
            );
        }
    }
}