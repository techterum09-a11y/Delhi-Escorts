@extends('layouts.app')

@section('title', 'About Us - ' . config('app.name'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">About Us</div>
            <div class="card-body">
                <h2>About Escorts Application</h2>
                <p>Welcome to our professional escort services platform. We are dedicated to providing exceptional service and building lasting relationships with our clients.</p>
                
                <h4 class="mt-4">Our Mission</h4>
                <p>To deliver professional, discreet, and high-quality services that exceed our clients' expectations.</p>
                
                <h4 class="mt-4">Our Values</h4>
                <ul>
                    <li>Professionalism</li>
                    <li>Discretion</li>
                    <li>Quality Service</li>
                    <li>Client Satisfaction</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
