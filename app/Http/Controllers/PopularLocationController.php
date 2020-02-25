<?php

namespace App\Http\Controllers;

use App\PopularLocation;
use Illuminate\Http\Request;
use App\Hotel;
use App\Room;

class PopularLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  \App\PopularLocation  $popularLocation
     * @return \Illuminate\Http\Response
     */
    public function show($popularLocation)
    {
        $location = $popularLocation;
        $showlocation = Hotel::where('location', '=', $popularLocation)->paginate(10);
        $tops = Hotel::where('rating', '=', '5')->take(5)->get();
        return view('hotels.popular', compact('showlocation', 'location', 'tops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PopularLocation  $popularLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(PopularLocation $popularLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PopularLocation  $popularLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PopularLocation $popularLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PopularLocation  $popularLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(PopularLocation $popularLocation)
    {
        //
    }
}
