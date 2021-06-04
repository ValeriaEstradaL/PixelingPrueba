<?php

namespace App\Http\Controllers;
use App\Models\CatBreed;
use Illuminate\Http\Request;

class CatBreedController extends Controller
{
    public function index()
    {
        return  $breed_cat= CatBreed::all();
    }
}
