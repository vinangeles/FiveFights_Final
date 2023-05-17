<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "team_name",
        "game",
        "num_of_members",
        "team_leader",
        "team_description"
    ];

}
