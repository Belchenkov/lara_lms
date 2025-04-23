<?php

namespace App\Repositories;

use App\Models\CourseCategory;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class CourseLanguageRepository.
 */
class CourseCategoryRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model(): string
    {
        return CourseCategory::class;
    }

    public function updateByUser(array $data, int $user_id): int
    {
        return CourseCategory::where('id', $user_id)->update($data);
    }
}
