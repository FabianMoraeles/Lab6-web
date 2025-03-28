<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'homeTeam',
        'awayTeam',
        'matchDate',
    ];

    public $timestamps = false;
}
