<?php

namespace App\Http\Controllers;
use App\Models\DogBreed;
use Illuminate\Http\Request;

class DogBreedController extends Controller
{
    public function index()
    {
        return  $dog_breed= DogBreed::all();
    }
}
