<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'moto_id',
        'user_id',
        'rating',
        'comment'
    ];

    public function moto()
    {
        return $this->belongsTo(moto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
