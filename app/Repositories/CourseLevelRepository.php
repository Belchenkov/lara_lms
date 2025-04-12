<?php

namespace App\Repositories;

use App\Models\CourseLevel;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class CourseLevelRepository.
 */
class CourseLevelRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model(): string
    {
        return CourseLevel::class;
    }

    public function create(array $data): CourseLevel
    {
        return CourseLevel::create($data);
    }

    public function updateByUser(array $data, int $user_id): int
    {
        return CourseLevel::where('id', $user_id)->update($data);
    }
}
