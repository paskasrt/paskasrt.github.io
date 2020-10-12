<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class PageController extends Controller
{
    public function index()
    {
        return view('frontend/homepage');
    }
 
    public function about()
    {
        return view('frontend/about');
    }
 
    public function contact()
    {
        return view('frontend/contact');
    }

    public function testimonials()
    {
        return view('frontend/testimonials');
    }
 
    public function features()
    {
        return view('frontend/features');
    }

    public function pricing()
    {
        return view('frontend/pricing');
    }
 
    public function team()
    {
        return view('frontend/team');
    }
}