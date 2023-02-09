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
                        <h1 class="display-5">Create role</h1>
                    </div>

                    <div class="card-body">
                        <form action="/roles" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" class="form-control" name="name" id="role" placeholder="Enter role name"/>
                            </div>

                            <div class="form-group">
                                <label for="permissions">Permissions</label>
                                <div class="row">
                                    @foreach ($permissions as $permission)
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name={{$permission->name}} id="permission" value={{$permission->id}}>
                                                <label class="form-check-label" for="permission">{{$permission->name}}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
