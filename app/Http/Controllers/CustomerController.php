<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Room;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class CustomerController extends Controller
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
    public function book($roomname){
        $roomname = Room::where('roomname', '=', $roomname)->first();
        $tops = Hotel::where('rating', '=', '5')->take(5)->get();
        return view('hotels.book', compact('roomname', 'tops'));
    }

    public function login(Request $request)
    {
       // $email = $request->email;
         if(Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::guard('customer')->user();

            return redirect()->route('home')->with('user', Auth::guard('customer')->user());
           // return view('Admin.dashboard')->with('user', Auth::user());

        }

        else
        {
            return back()->withErrors('Access denied.');
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/');
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

    public function bookit(Request $request){

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
            'fullname' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|min:4|unique:customers',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = new Customer();
        $user->fullname = request('fullname');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();
        return back()->with('success', 'Registered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
