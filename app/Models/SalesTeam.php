<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class SalesTeam extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    public static function boot() 
    {
        parent::boot();

        static::creating(function ($issue) {
            $issue->id = Str::uuid(36);
        });
    }

    protected $fillable = ['person_name', 'email', 'telephone', 'current_route', 'joined_date', 'comments'];
}
