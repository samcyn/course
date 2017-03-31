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
                    'description' => '<h5>About the course</h5>
						<p>People like a “special” price or exclusive offer directed only to them. Most Industrial and Manufacturing equipment buyers are seeking to be told that they are special.</p>
						<h5>What you’ll learn</h5>
						<ul>
							<li>Typography 
							<li>Color</li>
							 <li>Principles of Design: Understanding Different Stages of Designs </li>
							 <li>Responsive Design: Understand your user platform</li>
							 <li>Bootstrap </li>
							 <li>Designing for Mobile Android & iOS </li> 
							 <li>Introduction to UX Design</li>
							 <li>Rapid Prototyping
							 	<ol>
							 		<li>User Interviews</li>
							 		<li> Research & Personas</li>
							 		<li> Defining </li>
							 	</ol>
							 </li>
							 <li>Refining
							 	<ol>
							 		<li>Onboarding & Data Input </li>
							 		<li> User Testing (Testing your designs in the right environment)</li>
							 		<li> A/B Testing</li>
							 	</ol>
							 </li>
							 <li>AGILE/SCRUM principles</li>
						</ul>',
                    'duration' => '3 months',
                    'start_date' => date('Y-m-d', strtotime('1st March 2017')),
                    'price' => 20000.00,
                    'slug' => 'android-development',
                    'image_reference' => 'course_4.png',
                    'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita odit adipisci eum ad ea sit explicabo quidem quibusdam ipsum exercitationem dolorem quaerat cumque.'

                ],
                [
                    'name' => 'Backend Development',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita odit adipisci eum ad ea sit explicabo quidem quibusdam ipsum exercitationem dolorem quaerat cumque.',
                    'duration' => '3 months',
                    'start_date' => date('Y-m-d', strtotime('1st March 2017')),
                    'price' => 25000.00,
                    'slug' => 'backend-development',
                    'image_reference' => 'course_2.png',
                    'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita odit adipisci eum ad ea sit explicabo quidem quibusdam ipsum exercitationem dolorem quaerat cumque.'
                ],
                [
                    'name' => 'Frontend Development',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita odit adipisci eum ad ea sit explicabo quidem quibusdam ipsum exercitationem dolorem quaerat cumque.',
                    'duration' => '3 months',
                    'start_date' => date('Y-m-d', strtotime('1st March 2017')),
                    'price' => 15000.00,
                    'slug' => 'frontend-development',
                    'image_reference' => 'course_1.png',
                    'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita odit adipisci eum ad ea sit explicabo quidem quibusdam ipsum exercitationem dolorem quaerat cumque.'
                ],
                [
                    'name' => 'Product Design',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita odit adipisci eum ad ea sit explicabo quidem quibusdam ipsum exercitationem dolorem quaerat cumque.',
                    'duration' => '3 months',
                    'start_date' => date('Y-m-d', strtotime('1st March 2017')),
                    'price' => 27000.00,
                    'slug' => 'product-design',
                    'image_reference' => 'course_3.png',
                    'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita odit adipisci eum ad ea sit explicabo quidem quibusdam ipsum exercitationem dolorem quaerat cumque.'
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
