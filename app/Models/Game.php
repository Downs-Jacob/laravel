<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $guarded = [];

    protected $casts = [
        'primary_score' => 'integer',
        'secondary_objectives' => 'array',
        'secondary_score' => 'integer',
        'total' => 'integer',
        'scenario' => 'string',
        'army' => 'string',
        'player' => 'string',
    ];
}
