@extends('layouts.app')

@section('title', 'Our Services - ' . config('app.name'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Our Services</div>
            <div class="card-body">
                <h2>Professional Escort Services</h2>
                
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Companionship</h5>
                                <p class="card-text">Professional companionship for events and occasions.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Social Events</h5>
                                <p class="card-text">Accompany you to dinners, parties, and social gatherings.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Travel Companionship</h5>
                                <p class="card-text">Join you on travel and vacation experiences.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Special Events</h5>
                                <p class="card-text">Professional assistance for special occasions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
