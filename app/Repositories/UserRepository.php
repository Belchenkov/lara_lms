<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Collection;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model(): string
    {
        return User::class;
    }

    public function getByApprovedStatus(string $status): Collection
    {
       return User::where('users.approve_status', $status)->get();
    }
}
