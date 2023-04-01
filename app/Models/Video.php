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
        'thumbnail_photo_path',
        'category_id'
    ];

    protected $appends = [
        'averageRate'
    ];


    public function getAverageRateAttribute()
    {
        $sum = 0;
        foreach($this->ratings as $rating){
            $sum = $sum + $rating->rating;
        }
        $average = $sum/count($this->ratings);
        return (int) round($average, 0);

    }
    public function ratings()
    {
        return $this->hasMany(Rate::class);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
