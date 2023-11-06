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
                <a href="/add-user" class="btn btn-secondary my-3">Create User</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Permissions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $key=>$user)
                        <tr>
                            <td>{{$key +1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if ($user->roles->isNotEmpty())
                                    @foreach ($user->roles as $role)
                                        <span class="badge badge-danger">
                                    {{ $role->name }}
                                </span>
                                    @endforeach
                                @endif

                            </td>
{{--                            @php--}}
{{--                                dd($user->roles);--}}
{{--                            @endphp--}}

                            <td>
                                @if ($user->permissions->isNotEmpty())

                                    @foreach ($user->permissions as $permission)
                                        <span class="badge badge-secondary">
                                    {{ $permission->name }}
                                        </span>
                                    @endforeach

                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
