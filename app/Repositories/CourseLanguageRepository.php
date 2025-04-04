<?php

namespace App\Repositories;

use App\Models\CourseLanguage;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class CourseLanguageRepository.
 */
class CourseLanguageRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model(): string
    {
        return CourseLanguage::class;
    }

    public function create(array $data): CourseLanguage
    {
        return CourseLanguage::create($data);
    }

    public function updateByUser(array $data, int $user_id): int
    {
        return CourseLanguage::where('id', $user_id)->update($data);
    }
}
