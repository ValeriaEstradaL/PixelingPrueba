<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pet;
class CatBreed extends Model
{
    use HasFactory;

    public function pet(){
        return $this->hasMany('App\Pet');

    }
}
