<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;

    protected $table = 'showtimes';

    protected $fillable = ['show_hour', 'show_day', 'movie_id', 'theater_id'];

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
