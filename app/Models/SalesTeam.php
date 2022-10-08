<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class SalesTeam extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sales_team';

    public $incrementing = false;

    public static function boot() 
    {
        parent::boot();

        static::creating(function ($issue) {
            $issue->id = Str::uuid(36);
        });
    }

    protected $fillable = ['id', 'person_name', 'email', 'telephone', 'current_route', 'joined_date', 'comments', 'created_at', 'updated_at'];

    protected $casts = [
        'id' => 'string'
    ];
}
