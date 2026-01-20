<?php

namespace App\Http\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactStore()
    {
        // Handle form submission
        return redirect('/contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function profiles()
    {
        return view('profiles');
    }
}
