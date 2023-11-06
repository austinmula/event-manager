<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.roles', ['permissions'=> $permissions]);
    }

    public function store(Request $request)
    {
        $role = Role::create($request->all());

        $permissions =$request->except('_token','name');
        foreach ($permissions as $permission) {
                $role->permissions()->attach($permission);
                $role->save();
            }

        return redirect('/');
    }
}
