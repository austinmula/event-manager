<?php

namespace App\Http\Controllers;

use App\Mail\NewUserMail;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.home', ['users' => $users]);
    }

    public function store(Request $request)
    {
//        dd($request);
        //validate the fields
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email|max:255',
        ]);

        $password = "alphabet";

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($password);

        $user->save();

        if($request->role != null) {
            $user->roles()->attach($request->role);
            $user->save();
        }

        $sendToEmail = strtolower($request->email);
        if(!empty($sendToEmail) && filter_var($sendToEmail, FILTER_VALIDATE_EMAIL)){
            Mail::to($sendToEmail)->send(new NewUserMail($request));
        }

        return back()->with(['message' => 'Email successfully sent!']);
//        return redirect('/users');
    }

}
