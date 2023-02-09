<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function store(Request $request){
        $path = $request->file('banner')->store('images');

        

        dd($request->all());
    }


}
