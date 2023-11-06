<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    //
    public function index(){
        $events = Event::all();
        return view('home', ['events'=> $events]);
    }

    public function store(Request $request){
        $event = new Event();
        $event->name = $request->name;
        $event->frequency = $request->frequency;
        $event->category_id = $request->category;
        $event->start_date=$request->start_date;
        $event->lead_date=$request->lead_date;
        $event->status = $request->status;
        $event->owner_id = Auth::id();
        $path = $request->file('banner')->store('images');
        $event->banner = $path;

        $event->save();

        return redirect('/events');
    }
}
