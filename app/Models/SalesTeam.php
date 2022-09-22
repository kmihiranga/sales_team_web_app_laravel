<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesTeam extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['person_name', 'email', 'telephone', 'current_route', 'joined_date', 'comments'];
}
