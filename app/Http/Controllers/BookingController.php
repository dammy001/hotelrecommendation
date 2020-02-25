<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
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
        $this->validate(request(), [
            'datefrom' => 'required',
            'dateto' => 'required',
            'fullname' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|min:4',
            'contact' => 'required',
        ]);

        $booking = new Booking();
        $booking->hotelname = request('hotelname');
        $booking->roomname = request('roomname');
        $booking->price = request('price');
        $booking->datefrom = request('datefrom');
        $booking->dateto = request('dateto');
        $booking->fullname = request('fullname');
        $booking->email = request('email');
        $booking->contact = request('contact');

        if(Booking::where('datefrom', '=', $booking->datefrom)->where('dateto', '=', $booking->dateto)->count() > 0){
            return back()->with('danger', 'Room Already Booked For This Date');

        }else if(Booking::where('fullname', '=', $booking->fullname)->where('roomname', '=', $booking->roomname)->where('hotelname', '=', $booking->hotelname)->count() > 0){
            return back()->with('danger', 'You already book this room..');
        }
        else{
            $booking->save();
            return back()->with('success', 'Room Booked Successfully');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
