<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function snsaccounts()
    {
        return $this->hasMany(Snsaccount::class);
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class);
    }
}
