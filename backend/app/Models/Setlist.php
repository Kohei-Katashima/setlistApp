<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setlist extends Model
{
    use HasFactory;

    public function songs()
    {
        return $this->hasMany('App\Models\Song');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
