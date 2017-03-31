<?php

use Illuminate\Database\Seeder;

use App\Models\Course;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                    'name' => 'Android Development',
                    'description' => 'Learn mobile application development on the Android platform by acquiring strong knowledge of Android SDK. You will gain familiarity with RESTful APIs to connect Android applications to back-end services
As a part of this course, you will create widgets, customize list views and create applications using Facebook, Twitter, maps & location based services.',
                    'duration' => '3 months',
                    'start_date' => date('Y-m-d', strtotime('17th April 2017')),
                    'price' => 150000.00,
                    'slug' => 'android-development',
                    'image_reference' => 'course_4.png',
                    'short_desc' => 'Learn mobile application development on the Android platform by acquiring strong knowledge of Android SDK.'

                ],
                [
                    'name' => 'Backend Development',
                    'description' => 'Be a back-end web developer and be responsible for server-side web application logic and integration of the work front-end web developers do. Back-end developers usually write web services and APIs used by front-end developers and mobile application developers.',
                    'duration' => '6 weeks',
                    'start_date' => date('Y-m-d', strtotime('17th April 2017')),
                    'price' => 150000.00,
                    'slug' => 'backend-development',
                    'image_reference' => 'course_2.png',
                    'short_desc' => 'Be a back-end web developer and be responsible for server-side web application logic'
                ],
                [
                    'name' => 'Frontend Development',
                    'description' => 'Get the skills to build engaging, interactive user experiences on the web as a front-end web developer. Learn everything you need to design and develop user-facing code, and discover how to bring concepts to life on the browser canvas by combining essential graphic design and coding principles.
Develop competency with HTML, CSS, JavaScript, and jQuery. Earn between ....... and ......Apply best practices in responsive design and progressive enhancement.',
                    'duration' => '6 weeks',
                    'start_date' => date('Y-m-d', strtotime('17th April 2017')),
                    'price' => 150000.00,
                    'slug' => 'frontend-development',
                    'image_reference' => 'course_1.png',
                    'short_desc' => 'Get the skills to build engaging, interactive user experiences on the web as a front-end web developer.'
                ],
                [
                    'name' => 'Product Design',
                    'description' => 'More than 50% of the web is built using PHP. Easy to get started with, yet powerful in its functionality, PHP is used by individuals, startups, and enterprise-scale companies like Facebook to build websites. Get the skills to work with both client and server-side technologies as a PHP developer.
Learn the basics of front-end (client-side) technologies, like HTML, JavaScript, and CSS.Create a relational database using MySQL.Build dynamic websites that can retrieve and return information from the client side to the server side using PHP and MySQL.',
                    'duration' => '6 weeks',
                    'start_date' => date('Y-m-d', strtotime('1st March 2017')),
                    'price' => 150000.00,
                    'slug' => 'product-design',
                    'image_reference' => 'course_3.png',
                    'short_desc' => 'More than 50% of the web is built using PHP. Easy to get started with, yet powerful in its functionality, PHP is used by individuals, startups, and enterprise-scale companies like Facebook to build websites.'
                ]
            ];
            
            $all_courses = Course::all();

            if(!$all_courses){

                 foreach ($courses as $course) {
                    Course::create($course);
                }

            }
    }
}
