<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function index()
    {
        $movies = Movie::all();
        $movies->count();
        return view('Frontend.Front',compact('movies'));
    }
       
    public function details(Movie $movie)
    {
        return view('Frontend.details',compact('movie'));
        
    }
}
?>