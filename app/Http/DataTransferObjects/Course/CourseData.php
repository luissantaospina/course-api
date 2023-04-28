<?php

namespace App\Http\DataTransferObjects\Course;

use Spatie\LaravelData\Data;

class CourseData extends Data
{
    /**
     * @param string $name
     * @param string $start_date
     * @param string $end_date
     */
    public function __construct(
        public string $name,
        public string $start_date,
        public string $end_date
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $stringRule = 'required|string';
        return [
            'name' => $stringRule,
            'start_date' => $stringRule,
            'end_date' => $stringRule
        ];
    }
}
