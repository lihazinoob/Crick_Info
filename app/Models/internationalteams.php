<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internationalteams extends Model
{
     
    use HasFactory;
    public function playerinfos()
    {
        return $this->hasMany(playerinfo::class,'international_team_id');
    }
}
