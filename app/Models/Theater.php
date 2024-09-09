<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;

    // Add 'threeD' and 'dolby' to the fillable array
    protected $fillable = ['name', 'poster', 'threeD', 'dolby'];

    // Relationship with ShowTime model
    public function showTime()
    {
        return $this->hasMany(ShowTime::class);
    }
}
