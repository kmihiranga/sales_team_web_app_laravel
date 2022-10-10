<?php

namespace App\Repository\Eloquent\CurrentRoutes;

use App\Models\CurrentRoute;
use App\Repository\CurrentRoutes\CurrentRoutesRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Collection;

class CurrentRoutesRepository extends BaseRepository implements CurrentRoutesRepositoryInterface 
{
    /**
     * current routes repository constructor
     * @param CurrentRoute $model
     */
    public function __construct(CurrentRoute $model)
    {
        parent::__construct($model);    
    }

    /**
     * show all current routes list
     * @return Collection
     */
    public function all(): Collection 
    {
        // TODO: Implement all() method
        return $this->model->all();
    }
}