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
            <a href="/users" class="btn btn-secondary my-3">Create User</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">username</th>
                    <th scope="col">Email</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>
    </div>
</div>
@endsection
