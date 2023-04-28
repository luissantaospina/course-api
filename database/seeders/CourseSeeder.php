<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;


class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'name' => 'Python',
                'start_date' => '2023-03-09',
                'end_date' => '2024-03-09',
            ],
            [
                'name' => 'PHP',
                'start_date' => '2022-03-09',
                'end_date' => '2025-03-09',
            ]
        ];
        foreach ($courses as $course) {
            Course::updateOrCreate(['name' => $course['name']], $course);
        }
    }
}
