@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row justify-content-center">
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
                        <h1 class="display-5">Create new event</h1>
                    </div>

                    <div class="card-body">
                        <form action="/events" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Event Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter username"/>
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="start_date">Start Date</label>
                                <input type="datetime-local" id="start_date" name="start_date" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="lead_date">Lead Date</label>
                                <input type="datetime-local" id="lead_date" name="lead_date" class="form-control" />
                            </div>

                            <input type="hidden" name="status" value="upcoming">
{{--                            <div class="form-group">--}}
{{--                                <label for="status">Role</label>--}}
{{--                                <select class="form-control" name="status" id="status">--}}
{{--                                    <option value="upcoming">Upcoming</option>--}}
{{--                                    <option value="ongoing">Ongoing</option>--}}
{{--                                    <option value="completed">Completed</option>--}}
{{--                                    <option value="postponed">Postponed</option>--}}
{{--                                    <option value="cancelled">Cancelled</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label for="frequency">Frequency</label>
                                <select class="form-control" name="frequency" id="frequency">
                                    <option value="onetime">Onetime</option>
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="yearly">Yearly</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" name="category" id="category">
                                    <option value="category1">A</option>
                                    <option value="category2">B</option>
                                    <option value="category3">C</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file" id="banner" name="banner">
                                <label for="banner">Banner Image</label>
                            </div>



                            <button type="submit" class="btn btn-primary">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
