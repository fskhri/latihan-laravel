<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to Printer Universe</h1>
            <p class="lead">Your one-stop shop for high-quality printers.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/printer1.jpg') }}" class="card-img-top" alt="Printer 1">
                    <div class="card-body">
                        <h5 class="card-title">Professional Laser Printer</h5>
                        <p class="card-text">Ideal for business and office use. Fast and reliable printing.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/printer2.jpg') }}" class="card-img-top" alt="Printer 2">
                    <div class="card-body">
                        <h5 class="card-title">Wireless Inkjet Printer</h5>
                        <p class="card-text">Print from anywhere in your home or office. Easy setup and connectivity.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/printer3.jpg') }}" class="card-img-top" alt="Printer 3">
                    <div class="card-body">
                        <h5 class="card-title">Compact Photo Printer</h5>
                        <p class="card-text">Print your favorite photos with exceptional quality. Portable and easy to use.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
