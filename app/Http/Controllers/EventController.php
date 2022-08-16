<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index () {
        $idade = 26;
        $arr = [1,2,3,4,5,6];
        
        return view('welcome',
        [
         'nome' => "Wesley",
         'idade' => $idade,
         'arr' => $arr, 
         'profissao' => "programador",
         
        ]);
    }

    public function create () {
        return view ('events.create');
    }
}
