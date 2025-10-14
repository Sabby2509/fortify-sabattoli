<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MovieEditRequest;

class MovieController extends Controller
{
    
    public function index(){
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }

    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    public function movieList(){
    $movies = Movie::all();    
    return view('movie.movies', ['movies'=>$movies]);
}

public function showDetail($id){
    $movies = [
        ['id'=>'1', 'title'=>'Incontri ravvicinati del terzo tipo', 'director'=> 'S. Spielberg', 'img'=>'/media/poster/spielberg.jpeg', 'genres'=>'Sci-fi'],
        ['id'=>'2', 'title'=>'1917', 'director'=>'S. Mendes', 'img'=>'/media/poster/1917.jpeg', 'genres'=>'Guerra'],
        ['id'=>'3', 'title'=>'Quei bravi ragazzi', 'director'=>'M. Scorsese', 'img'=>'/media/poster/scorsese.jpeg', 'genres'=>'Noir'],
        ['id'=>'4', 'title'=>'Barbie', 'director'=>'G. Gerwig', 'img'=>'/media/poster/barbie.jpeg', 'genres'=>'Avventura'],
        ['id'=>'5', 'title'=>'Lost in translation', 'director'=>'S. Coppola', 'img'=>'/media/poster/coppola.jpeg', 'genres'=>'Drammatico'],
    ];
    foreach ($movies as $movie) {
        if($id == $movie['id']){
            return view('movie.movie-detail', ['movie'=>$movie]);
        }
            
    }
}

public function create(){
    return view('movie.create'); 
}

public function store(MovieRequest $request){
    $movie = Movie::create([
        'title'=>$request->title,
        'director'=>$request->director,
        'year'=>$request->year,
        'plot'=>$request->plot,
        'img'=>$request->file('img')->store('public/images')
    ]);

    return redirect()->route('homepage')->with('successMessage', 'Hai inserito correttamente il tuo film!');

}

public function show(Movie $movie){
    return view('movie.show', compact('movie'));

}

public function edit(Movie $movie){
    return view('movie.edit', compact('movie'));

}

public function update(MovieEditRequest $request, Movie $movie){
    if ($movie->user_id == Auth::user()->id) {
    $movie->update([
        'title'=>$request->title,
        'director'=>$request->director,
        'year'=>$request->year,
        'plot'=>$request->plot,
    ]);
    if($request->img){
        $request->validate([
                'img' => 'image'
        ]);
        $movie->update([
            $movie->img = $request->file('img')->store('public/images')
        ]);
    }
    return redirect()->route('homepage')->with('successMessage', 'Hai modificato correttamente il tuo film!');
}
}

public function destroy(Movie $movie){
    $movie->delete();
    return redirect()->route('homepage')->with('successMessage', 'Hai eliminato correttamente il tuo film!');
}
}