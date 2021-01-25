<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoviePost;
use App\Models\Movie;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class MovieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(8);
        return view('index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MoviePost $request)
    {
        $movie = new Movie();
        $movie->fill($request->toArray());
        $movie->save();
        return redirect(route('movie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Movie::find($id);
        return view('show',compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Movie::find($id);
        return view('edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->fill($request->toArray());
        $movie->save();
        Alert::success("S'ha guardat la pel.licula");
        return redirect(route('movie.show',$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect(route('movie.index'));
    }

    public function rent($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->rented = 1;
        $movie->save();
        $movie->users()->attach(Auth::id(), ['dateRent' => date('Y/m/d')]);
        return redirect(route('movie.show',$movie->id));



    }
    public function return($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->rented = 0;
        $movie->save();
        $movie->users()->updateExistingPivot(Auth::id(), ['dateReturn' =>date('Y/m/d')]);
        return redirect(route('movie.show',$movie->id));
    }
}
