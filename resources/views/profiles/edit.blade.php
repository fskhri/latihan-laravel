<!-- resources/views/profiles/edit.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Edit Profile</h1>

        @if(isset($user))
        <form method="POST" action="{{ route('profiles.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>

                <div class="mb-3">
        <label for="profile_photo" class="form-label">Profile Photo</label>
        <input type="file" class="form-control" id="profile_photo" name="profile_photo">
    </div>

    <button type="submit" class="btn btn-primary">Update Profile</button>

            </form>
        @else
            <p>No profile found.</p>
        @endif
    </div>
@endsection
