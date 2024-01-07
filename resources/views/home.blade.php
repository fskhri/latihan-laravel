<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4 text-primary">Welcome, {{ Auth::user()->name }}!</h1>
                <p class="lead">You are logged in!</p>

                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Your Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p>Explore the features and functionalities available on your dashboard.</p>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{ route('profiles.index') }}">Profile</a></li>
                            <li class="list-group-item"><a href="{{ route('user.settings.index') }}">Settings</a></li>
                            <li class="list-group-item"><a href="{{ route('activities') }}">Your Activities</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
