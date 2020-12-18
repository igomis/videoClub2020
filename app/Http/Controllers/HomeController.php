<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return redirect()->route('movie.index');
    }
}
