<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>Book Call Girls in Delhi – Cash Payment & Instant Booking 24/7</title>
     <meta name="description" content="Book Call Girls in Delhi with cash payment and instant booking. Enjoy trusted, safe, and discreet service with 24/7 availability for your satisfaction.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

   <body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color:white;">

    <nav style="background-color:#2c3e50; box-shadow:0 2px 4px rgba(0,0,0,0.1);" class="navbar navbar-expand-lg navbar-dark">
        <div style="max-width:1140px; margin:0 auto; display:flex; align-items:center; justify-content:space-between;">
            <a href="{{ url('/') }}" style="font-weight:bold; color:white; text-decoration:none;" class="navbar-brand">
                {{ config('app.name', 'Escorts') }}
            </a>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                style="background:none; border:none; color:white; font-size:24px; cursor:pointer;">
                &#9776;
            </button>
            <div id="navbarNav" style="display:flex; align-items:center; gap:15px;">
                <ul style="list-style:none; display:flex; margin:0; padding:0;">
                    <li style="margin-left:10px;">
                        <a href="{{ route('home') }}" style="color:white; text-decoration:none; padding:8px 12px;">Home</a>
                    </li>
                    <li style="margin-left:10px;">
                        <a href="{{ route('about') }}" style="color:white; text-decoration:none; padding:8px 12px;">About</a>
                    </li>
                    <li style="margin-left:10px;">
                        <a href="{{ route('services') }}" style="color:white; text-decoration:none; padding:8px 12px;">Services</a>
                    </li>
                    <li style="margin-left:10px;">
                        <a href="{{ route('gallery') }}" style="color:white; text-decoration:none; padding:8px 12px;">Gallery</a>
                    </li>
                    <li style="margin-left:10px;">
                        <a href="{{ route('profiles') }}" style="color:white; text-decoration:none; padding:8px 12px;">Profiles</a>
                    </li>
                    <li style="margin-left:10px;">
                        <a href="{{ route('contact') }}" style="color:white; text-decoration:none; padding:8px 12px;">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    


    <main class="py-0">
        <div>
            @yield('content')
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>