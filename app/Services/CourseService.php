<?php

namespace App\Services;

class CourseService
{
    public static function getAllCourses()
    {
        return [
            1 => [
                'title' => 'Advanced Web Development',
                'description' => 'Master modern web development with React, Node.js, and advanced JavaScript concepts. This comprehensive course covers everything from basic concepts to advanced patterns and best practices.',
                'instructor' => 'John Smith',
                'duration' => '12 weeks',
                'level' => 'Advanced',
                'students' => 1250,
                'rating' => 4.8,
                'videoUrl' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'topics' => ['React', 'Node.js', 'JavaScript', 'API Development', 'Database Design'],
                'lessons' => [
                    ['id' => 1, 'title' => 'Introduction to Modern Web Development', 'duration' => '15:30', 'type' => 'video'],
                    ['id' => 2, 'title' => 'Setting Up Your Development Environment', 'duration' => '22:45', 'type' => 'video'],
                    ['id' => 3, 'title' => 'React Fundamentals and Components', 'duration' => '35:20', 'type' => 'video'],
                    ['id' => 4, 'title' => 'State Management with Redux', 'duration' => '28:15', 'type' => 'video'],
                    ['id' => 5, 'title' => 'Building RESTful APIs with Node.js', 'duration' => '42:30', 'type' => 'video'],
                    ['id' => 6, 'title' => 'Database Integration and MongoDB', 'duration' => '38:45', 'type' => 'video'],
                    ['id' => 7, 'title' => 'Authentication and Security', 'duration' => '31:20', 'type' => 'video'],
                    ['id' => 8, 'title' => 'Deployment and Production', 'duration' => '25:10', 'type' => 'video']
                ]
            ],
            2 => [
                'title' => 'Data Science Fundamentals',
                'description' => 'Learn the fundamentals of data science including Python programming, statistical analysis, machine learning, and data visualization. Perfect for beginners looking to enter the field.',
                'instructor' => 'Sarah Johnson',
                'duration' => '10 weeks',
                'level' => 'Beginner',
                'students' => 890,
                'rating' => 4.6,
                'videoUrl' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'topics' => ['Python', 'Statistics', 'Machine Learning', 'Data Visualization', 'Pandas'],
                'lessons' => [
                    ['id' => 1, 'title' => 'Introduction to Data Science', 'duration' => '18:45', 'type' => 'video'],
                    ['id' => 2, 'title' => 'Python Basics for Data Science', 'duration' => '32:20', 'type' => 'video'],
                    ['id' => 3, 'title' => 'Working with Pandas and NumPy', 'duration' => '45:15', 'type' => 'video'],
                    ['id' => 4, 'title' => 'Data Visualization with Matplotlib', 'duration' => '28:30', 'type' => 'video'],
                    ['id' => 5, 'title' => 'Statistical Analysis Fundamentals', 'duration' => '35:45', 'type' => 'video'],
                    ['id' => 6, 'title' => 'Introduction to Machine Learning', 'duration' => '40:20', 'type' => 'video']
                ]
            ],
            3 => [
                'title' => 'Digital Marketing Mastery',
                'description' => 'Complete guide to digital marketing including SEO, social media marketing, content marketing, email marketing, and paid advertising strategies.',
                'instructor' => 'Mike Davis',
                'duration' => '8 weeks',
                'level' => 'Intermediate',
                'students' => 2100,
                'rating' => 4.7,
                'videoUrl' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'topics' => ['SEO', 'Social Media', 'Content Marketing', 'Email Marketing', 'PPC Advertising'],
                'lessons' => [
                    ['id' => 1, 'title' => 'Digital Marketing Strategy Overview', 'duration' => '20:15', 'type' => 'video'],
                    ['id' => 2, 'title' => 'SEO Fundamentals and Best Practices', 'duration' => '38:45', 'type' => 'video'],
                    ['id' => 3, 'title' => 'Social Media Marketing Strategies', 'duration' => '32:30', 'type' => 'video'],
                    ['id' => 4, 'title' => 'Content Creation and Marketing', 'duration' => '28:20', 'type' => 'video'],
                    ['id' => 5, 'title' => 'Email Marketing Campaigns', 'duration' => '25:45', 'type' => 'video'],
                    ['id' => 6, 'title' => 'PPC and Google Ads', 'duration' => '35:10', 'type' => 'video']
                ]
            ],
            4 => [
                'title' => 'Mobile App Development',
                'description' => 'Build native mobile applications using React Native. Learn navigation, state management, API integration, and app store deployment.',
                'instructor' => 'Alex Rodriguez',
                'duration' => '14 weeks',
                'level' => 'Intermediate',
                'students' => 1543,
                'rating' => 4.8,
                'videoUrl' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'topics' => ['React Native', 'Navigation', 'API Integration', 'App Store', 'Push Notifications'],
                'lessons' => [
                    ['id' => 1, 'title' => 'React Native Setup and Environment', 'duration' => '25:30', 'type' => 'video'],
                    ['id' => 2, 'title' => 'Building Your First Mobile App', 'duration' => '42:15', 'type' => 'video'],
                    ['id' => 3, 'title' => 'Navigation and Routing', 'duration' => '35:45', 'type' => 'video'],
                    ['id' => 4, 'title' => 'State Management in Mobile Apps', 'duration' => '38:20', 'type' => 'video'],
                    ['id' => 5, 'title' => 'API Integration and Data Fetching', 'duration' => '32:10', 'type' => 'video'],
                    ['id' => 6, 'title' => 'Push Notifications Implementation', 'duration' => '28:45', 'type' => 'video'],
                    ['id' => 7, 'title' => 'App Store Deployment', 'duration' => '30:20', 'type' => 'video']
                ]
            ],
            5 => [
                'title' => 'UI/UX Design Fundamentals',
                'description' => 'Learn the principles of user interface and user experience design. Master design thinking, wireframing, prototyping, and user research.',
                'instructor' => 'Emma Wilson',
                'duration' => '6 weeks',
                'level' => 'Beginner',
                'students' => 987,
                'rating' => 4.6,
                'videoUrl' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'topics' => ['Design Thinking', 'Wireframing', 'Prototyping', 'User Research', 'Figma'],
                'lessons' => [
                    ['id' => 1, 'title' => 'Introduction to UI/UX Design', 'duration' => '22:30', 'type' => 'video'],
                    ['id' => 2, 'title' => 'Design Thinking Process', 'duration' => '28:45', 'type' => 'video'],
                    ['id' => 3, 'title' => 'User Research and Personas', 'duration' => '35:20', 'type' => 'video'],
                    ['id' => 4, 'title' => 'Wireframing and Prototyping', 'duration' => '40:15', 'type' => 'video'],
                    ['id' => 5, 'title' => 'Figma Mastery', 'duration' => '45:30', 'type' => 'video']
                ]
            ],
            6 => [
                'title' => 'Python for Data Science',
                'description' => 'Dive into data science with Python. Learn pandas, numpy, matplotlib, and scikit-learn. Work with real datasets and build machine learning models.',
                'instructor' => 'Dr. Michael Chen',
                'duration' => '10 weeks',
                'level' => 'Intermediate',
                'students' => 2156,
                'rating' => 4.7,
                'videoUrl' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'topics' => ['Pandas', 'NumPy', 'Data Visualization', 'Machine Learning', 'Jupyter Notebooks'],
                'lessons' => [
                    ['id' => 1, 'title' => 'Python Environment Setup', 'duration' => '20:15', 'type' => 'video'],
                    ['id' => 2, 'title' => 'Jupyter Notebooks Mastery', 'duration' => '25:30', 'type' => 'video'],
                    ['id' => 3, 'title' => 'NumPy for Numerical Computing', 'duration' => '38:45', 'type' => 'video'],
                    ['id' => 4, 'title' => 'Pandas Data Manipulation', 'duration' => '42:20', 'type' => 'video'],
                    ['id' => 5, 'title' => 'Data Visualization Techniques', 'duration' => '35:10', 'type' => 'video'],
                    ['id' => 6, 'title' => 'Machine Learning with Scikit-learn', 'duration' => '48:30', 'type' => 'video']
                ]
            ]
        ];
    }

    public static function getCourse($id)
    {
        $courses = self::getAllCourses();
        return $courses[$id] ?? null;
    }

    public static function getCoursesByLevel($level)
    {
        return array_filter(self::getAllCourses(), function($course) use ($level) {
            return $course['level'] === $level;
        });
    }

    public static function searchCourses($query)
    {
        $courses = self::getAllCourses();
        return array_filter($courses, function($course) use ($query) {
            return stripos($course['title'], $query) !== false ||
                   stripos($course['description'], $query) !== false ||
                   stripos($course['instructor'], $query) !== false ||
                   in_array(strtolower($query), array_map('strtolower', $course['topics']));
        });
    }

    public static function getGradients()
    {
        return [
            'from-blue-500 to-purple-600',
            'from-green-500 to-teal-600', 
            'from-orange-500 to-red-600',
            'from-purple-500 to-pink-600',
            'from-indigo-500 to-blue-600',
            'from-pink-500 to-rose-600'
        ];
    }
}