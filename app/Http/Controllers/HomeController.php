<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Room;
use App\PopularLocation;

class HomeController extends Controller
{
    public function index(){
        $counts = Hotel::all();
        $hotels = Hotel::where('category', '=', 'Popular')->inRandomOrder()->take(8)->get();
        $recommends = Hotel::whereBetween('rating', array(4, 5))->take(4)->get();
        $tops = Hotel::where('rating', '=', '5')->inRandomOrder()->take(5)->get();

        $popularlocations = PopularLocation::all();

        return view('index', compact('hotels', 'recommends', 'tops', 'counts', 'popularlocations'));
    }

    public function contactus(){
        $tops = Hotel::where('rating', '=', '5')->take(5)->get();
        return view('contact.contact', compact('tops'));
    }

    public function home(){

        $counts = Hotel::all();
        $popularlocations = PopularLocation::all();
        $hotels = Hotel::where('category', '=', 'Popular')->inRandomOrder()->take(8)->get();
        $recommends = Hotel::whereBetween('rating', array(4, 5))->take(4)->get();
        $tops = Hotel::where('rating', '=', '5')->take(5)->get();
        return view('welcome', compact('counts', 'tops', 'hotels', 'recommends', 'popularlocations'));
    }

    public function about(){
        $tops = Hotel::where('rating', '=', '5')->take(5)->get();
        return view('contact.about', compact('tops'));
    }

    public function listhotel(){
        $tops = Hotel::where('rating', '=', '5')->take(5)->get();
        return view('listhotel', compact('tops'));
    }

    public function signup(){
        return view('signup');
    }

}
