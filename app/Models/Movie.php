<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "date",
        "duration",
        "poster_image",

    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
