<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
