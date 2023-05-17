<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "tournament_name",
        "game",
        "date",
        "location",
        "img"
    ];

}
