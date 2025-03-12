<?php

namespace App\Repositories;

use App\Enums\ApproveStatus;
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

    public function getByApprovedStatuses(array $statuses): Collection
    {
       return User::whereIn('approve_status', $statuses)->get();
    }

    public function updateByUser(array $data, int $user_id): int
    {
        return User::where('id', $user_id)->update($data);
    }
}
