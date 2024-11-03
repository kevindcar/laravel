<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moto extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'type',
        'description',
        'image_url'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
