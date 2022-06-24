<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        # tutti gli studenti
        $movies = Movie::all();
        //dump($students);

        # i primi 5 studenti che  si chiamano rocco e hanno un ID > 74
        // $students = Student::where('name','Rocco')->where('id','>',74)->limit(10)->get();
        //dump($students);

        return view('pages.movies', compact('movies'));
    }
}
