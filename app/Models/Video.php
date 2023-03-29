<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rate;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'title',
        'description',
        'public',
        'thumbnail_photo_path'
    ];

    public function ratings()
    {
        return $this->hasMany(Rate::class);
    }
}
