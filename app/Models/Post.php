<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'price',
        'description'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    public function place() {
        return $this->belongsTo(Place::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
