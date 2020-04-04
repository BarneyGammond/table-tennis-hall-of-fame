<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'tournaments_won', 'points_won', 'points_conceded'];
}
