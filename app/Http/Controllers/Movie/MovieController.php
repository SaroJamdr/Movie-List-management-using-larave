<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('addmovie');
    }


    public function list(){
        $movies = Movie::all();
        return view('welcome',compact('movies'));
    }

    public function store(Request $request)
    {   

        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'language' => 'required',
        ]);

        //  dd($request);
        $movie = new Movie();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $movie->image = $imageName;
        
        $movie->name = $request->name;
        $movie->director = $request->director;
        $movie->actor = $request->actor;
        $movie->language = $request->language;
        $movie->release = $request->release;
        $movie->save();
        return back()->with('success','Item inserted successfully!');
    }

    public function update(Request $request,Movie $movie){
        if (!empty($request->oldimage && $request->file('image')))
        {
            unlink(public_path('images/' . $request->oldimage));
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        else if(!empty($request->file('image')))
        {
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        else
        {
            $imageName = $request->oldimage;
        }
        
        $movie->name = $request->name;

        $movie->name = $request->name;
        $movie->director = $request->director;
        $movie->actor = $request->actor;
        $movie->release = $request->release;
        $movie->language = $request->language;
        $movie->save();
        return back()->with('success','Item Updated successfully!');
    }

    public function delete(Movie $movie)
    {   
        
        if(!empty($movie->image))
        {
            unlink(public_path('images/'.$movie->image));

        }

        $movie->delete();
        return back()->with('danger','Item deleted successfully!');
    }

}