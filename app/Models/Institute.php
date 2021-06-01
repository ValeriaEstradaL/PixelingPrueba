<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','email'];
    public function pet(){
        return $this->hasMany('App\Pet');

    }
}
