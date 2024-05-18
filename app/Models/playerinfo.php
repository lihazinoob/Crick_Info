<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playerinfo extends Model
{
    use HasFactory;
    public function internationalteam()
    {
        return $this->belongsTo(internationalteams::class);
    }
    public function favs()
    {
        return $this->hasMany(fav::class);
    }
}
