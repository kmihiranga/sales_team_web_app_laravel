<?php

namespace App\Repository\SalesTeam;

use App\Models\SalesTeam;
use Illuminate\Support\Collection;

interface SalesTeamRepositoryInterface
{
    public function all(): Collection;

    public function delete(string $id): int;
}

