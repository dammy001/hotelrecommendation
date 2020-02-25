<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::paginate(8);
        $tops = Hotel::where('rating', '=', '5')->take(5)->get();
        return view('hotels.hotels', compact('hotels', 'tops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function search(Request $request){

        $location = $request->input('location');
        $pricefrom = $request->input('pricefrom');
        $priceto = $request->input('priceto');
        $roomtype = $request->input('roomtype');

        $tops = Hotel::where('rating', '=', '5')->take(5)->get();

        $results = Hotel::where('location', 'like', "%$location%")
        ->whereBetween('price', array($pricefrom, $priceto))
        ->paginate(10);
        return view('hotels.searchresult', compact('results', 'tops'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($hotel)
    {
        $hoteldetail = Hotel::where('hotelname', '=', $hotel)->first();

        $rooms = Room::where('hotelname', '=', $hotel)->get();
        $tops = Hotel::where('rating', '=', '5')->take(5)->get();

        return view('hotels.hoteldetails', compact('hoteldetail', 'tops', 'rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
