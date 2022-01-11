<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{   
    public function index(){


        ddd(Movie::all());
    
        return view ('home');
    }
}