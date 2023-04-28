<?php

namespace App\Http\Repositories\Course;

use App\Http\DataTransferObjects\Course\CourseData;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

interface CourseRepository
{
    /**
     * @param int $id
     * @return Course
     */
    public function findById(int $id): Course;

    /**
     * @param int $id
     * @return string
     */
    public function destroyById(int $id): string;

    /**
     * @return Collection
     */
    public function selectAll(): Collection;

    /**
     * @param CourseData $courseData
     * @return Course
     */
    public function store(CourseData $courseData): Course;

    /**
     * @param int $id
     * @param CourseData $courseData
     * @return Course
     */
    public function updateById(int $id, CourseData $courseData): Course;
}
