<?php

namespace App\Repository\SalesTeam;

use App\Models\SalesTeam;

interface SalesTeamRepositoryInterface
{
    public function all();

    public function delete(string $id);
}

