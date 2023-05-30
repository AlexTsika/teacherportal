<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    // relation with teacher
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}