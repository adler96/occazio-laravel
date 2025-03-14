<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name'
    ];

    public function posts() {
        return $this->hasMany(Place::class);
    }
}
