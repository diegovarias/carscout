<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The users that belong to the car.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
