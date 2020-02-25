<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Room;
use App\Customer;
use App\Hotel;
use App\Category;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
       // $email = $request->email;
         if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::guard('admin')->user();

            return redirect()->route('admin.dashboard')->with('user', Auth::guard('admin')->user());
           // return view('Admin.dashboard')->with('user', Auth::user());

        }

        else
        {
            return back()->withErrors('Access denied.');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function dashboard(){
        $hotels = Hotel::count('id');
        $rooms = Room::count('id');
        $customers = Customer::count('id');
        $allbookings = Booking::count('id');
        $bookings = Booking::take(5)->get();
        return view('admin.dashboard', compact('hotels', 'bookings', 'rooms', 'customers', 'allbookings'));
    }

    public function hotels(){
       $hotels =  Hotel::all();
        return view('admin.managehotel', compact('hotels'));
    }

    public function bookings(){
       $bookings = Booking::all();
        return view('admin.bookings', compact('bookings'));
    }

    public function rooms(){
        $rooms = Room::all();
        return view('admin.manageroom', compact('rooms'));
    }

    public function category(){
        $categories = Category::all();
        return view('admin.managecategory', compact('categories'));
    }

    public function addhotel(){
        return view('admin.addhotel');
    }

    public function addcategory(){
        return view('admin.addcategory');
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
            'category' => 'required|regex:/^[\pL\s\-]+$/u',

        ]);

        $category = new Category();
        $category->categories = request('category');

        $category->save();

        return back()->with('success', 'Category Added Successfully');
    }

    public function add(Request $request)
    {
        $this->validate(request(), [
            'hotelname' => 'required|regex:/^[\pL\s\-]+$/u',
            'category' => 'required|regex:/^[\pL\s\-]+$/u',
            'location' => 'required|regex:/^[\pL\s\-]+$/u',
            'address' => 'required',
            'contact' => 'required',
            'roomtype' => 'required',
            'price' => 'required',
            'description' => 'required',
            'facilities' => 'required',
            'image' => 'required',
        ]);

        $hotel = new Hotel();
        $hotel->hotelname = request('hotelname');
        $hotel->category = request('category');
        $hotel->location = request('location');
        $hotel->address = request('address');
        $hotel->contact = request('contact');
        $hotel->roomtype = request('roomtype');
        $hotel->price = request('price');
        $hotel->description = request('description');
        $hotel->facilities = request('facilities');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $folderpath = public_path().'/uploads/'. date('Y'). $filename;
            $file->move($folderpath);
            $hotel->image = $filename;
        }
        else{
            return $request;
            $hotel->image = '';
        }

        $hotel->save();


        return back()->with('success', 'Hotel Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
