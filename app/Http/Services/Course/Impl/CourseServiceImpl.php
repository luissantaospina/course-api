<?php

namespace App\Http\Services\Course\Impl;

use App\Http\DataTransferObjects\Course\CourseData;
use App\Http\Repositories\Course\CourseRepository;
use App\Http\Services\Course\CourseService;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Exception;

/**
 * Class CourseService
 * @package App\Http\Controllers\Course
 */
class CourseServiceImpl implements CourseService
{
    /**
     * @var CourseRepository
     */
    private CourseRepository $courseRepository;

    /**
     * CourseServiceImpl constructor.
     * @param CourseRepository $courseRepository
    */
    public function __construct(
        CourseRepository $courseRepository
    )
    {
        $this->courseRepository = $courseRepository;
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->courseRepository->selectAll();
    }

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string
    {
        return $this->courseRepository->destroyById($id);
    }

    /**
     * @param int $id
     * @return Course
     */
    public function show(int $id): Course
    {
        return $this->courseRepository->findById($id);
    }

    /**
     * @param CourseData $courseData
     * @return Course
     * @throws Exception
     */
    public function store(CourseData $courseData): Course
    {
        return $this->courseRepository->store($courseData);
    }

    /**
     * @param int $id
     * @param CourseData $courseData
     * @return Course
     * @throws Exception
     */
    public function update(int $id, CourseData $courseData): Course
    {
        return $this->courseRepository->updateById($id, $courseData);
    }
}
