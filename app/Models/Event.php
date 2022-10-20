<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'creative_name',
        'name',
        'slug',
        'description',
        'rules',
        'contact',
        'max_team_members',
        'poster',
    ];
}
