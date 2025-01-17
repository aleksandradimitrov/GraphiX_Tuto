<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'comment',
        'user_id',
        'video_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
