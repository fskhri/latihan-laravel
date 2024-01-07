<!-- resources/views/profiles/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Profile</div>

                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->name }}'s Profile Photo" class="img-fluid rounded-circle" style="max-width: 150px;">
                        </div>

                        <div class="mb-3">
                            <strong>Name:</strong> {{ $user->name }}
                        </div>

                        <div class="mb-3">
                            <strong>Email:</strong> {{ $user->email }}
                        </div>

                        <div class="mb-3">
                            <strong>Joined:</strong> {{ $user->created_at->diffForHumans() }}
                        </div>

                        <a href="{{ route('profiles.edit', $user->id) }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
