<?php

namespace App\Http\Services\Course;

use App\Http\DataTransferObjects\Course\CourseData;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

interface CourseService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string;

    /**
     * @param int $id
     * @return Course
     */
    public function show(int $id): Course;

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
    public function update(int $id, CourseData $courseData): Course;
}
