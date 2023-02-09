@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    Sidebar
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    {{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h1 class="display-5">Create new user</h1>
                    </div>

                    <div class="card-body">
                        <form action="/users" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address"/>
                            </div>
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter username"/>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" name="role" id="role">
                                    @foreach ($roles as $role)
                                        <option value={{$role->id}}>{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
