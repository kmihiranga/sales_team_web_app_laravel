<?php

namespace App\Repository\Eloquent\SalesTeam;

use App\Models\SalesTeam;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\SalesTeam\SalesTeamRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class SalesTeamRepository extends BaseRepository implements SalesTeamRepositoryInterface
{
    /**
     * SalesTeamRepository constructor
     * @param SalesTeam $model
     */
    public function __construct(SalesTeam $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        // TODO: Implement all() method.
        return $this->model->latest()->get();
    }

    /**
     * @return LengthAwarePaginator
     */
    public function paginate(): LengthAwarePaginator 
    {
        // TODO: Implement paginate() method.
        return $this->model->latest()->paginate(10);
    }

    /**
     * @param String $id
     * @return int
     */
    public function delete(string $id): int
    {
        // TODO: Implement delete() method.
        return $this->model->destroy($id);
    }
}
