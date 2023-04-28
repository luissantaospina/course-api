<?php


namespace App\Http\Repositories\Course\Impl;

use App\Http\DataTransferObjects\Course\CourseData;
use App\Http\Repositories\Course\CourseRepository;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class CourseRepositoryImpl implements CourseRepository
{
    /**
     * @param int $id
     * @return string
     * @throws Exception
     */
    public function destroyById(int $id): string
    {
        DB::beginTransaction();
        try {
            Course::destroy($id);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return 'El curso ha sido eliminado exitosamente';
    }

    /**
     * @param int $id
     * @return Course
     */
    public function findById(int $id): Course
    {
        return Course::findOrFail($id);
    }

    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return Course::all();
    }

    /**
     * @param CourseData $courseData
     * @return Course
     * @throws Exception
     */
    public function store(CourseData $courseData): Course
    {
        DB::beginTransaction();
        try {
            $course = new Course();
            $course->fill((array)$courseData);
            $course->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $course;
    }

    /**
     * @param int $id
     * @param CourseData $courseData
     * @return Course
     * @throws Exception
     */
    public function updateById(int $id, CourseData $courseData): Course
    {
        DB::beginTransaction();
        try {
            $course = Course::findOrFail($id);
            $course->fill((array)$courseData);
            $course->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $course;
    }
}

