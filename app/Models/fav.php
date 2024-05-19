<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fav extends Model
{
    use HasFactory;
    public function player()
    {
        return $this->belongsTo(PlayerInfo::class, 'player_id');
    }
    
}

