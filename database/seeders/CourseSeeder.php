<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'course_name'=>"Web Design"
        ]);
        Course::create([
            'course_name'=>"Pro Web & Graphics Design"
        ]);
        Course::create([
            'course_name'=>"Full Stack Developer"
        ]);
        Course::create([
            'course_name'=>"Digital Marketing"
        ]);
    }
}
