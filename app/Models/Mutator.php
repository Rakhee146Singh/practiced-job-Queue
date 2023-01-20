<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutator extends Model
{
    use HasFactory;
    //Accessor

    public function getFirstNameAttribute($value)
    {
        return lcfirst($value);
    }
}
