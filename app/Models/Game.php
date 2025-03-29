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
        'home_goals',
        'away_goals',
        'home_yellow_cards',
        'away_yellow_cards',
        'home_red_cards',
        'away_red_cards',
        'extra_time',
    ];

    
    public $timestamps = true;

 
}
