@extends('admin.layouts.admin')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Recent Bookings</h5>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">booking ID</th>
                                <th class="border-0">Full Name</th>
                                <th class="border-0">Hotel</th>
                                <th class="border-0">Room</th>
                                <th class="border-0">Date From</th>
                                <th class="border-0">Date To</th>
                                <th class="border-0">Price</th>
                                <th class="border-0">Contact</th>
                                <th class="border-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($bookings as $booking)
                            <tr>
                            <td>{{$booking->id}}</td>

                            <td>{{$booking->fullname}}</td>
                                    <td>{{$booking->hotelname}}</td>
                                    <td>{{$booking->roomname}}</td>
                                    <td>{{$booking->datefrom}}</td>
                                    <td>{{$booking->dateto}}</td>
                                    <td>{{$booking->price}}</td>
                                    <td>{{$booking->contact}}</td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Successful </td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
