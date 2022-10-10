<?php

namespace App\Repository\SalesTeam;

use App\Models\SalesTeam;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface SalesTeamRepositoryInterface
{
    public function all(): Collection;

    public function paginate(): LengthAwarePaginator;

    public function delete(string $id): int;
}

