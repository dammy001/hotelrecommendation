@extends('admin.layouts.admin')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">All Hotels</h5>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">Image</th>
                                <th class="border-0">Hotel Name</th>
                                <th class="border-0">Category</th>
                                <th class="border-0">Location</th>
                                <th class="border-0">Address</th>
                                <th class="border-0">Contact</th>
                                <th class="border-0">Room Type</th>
                                <th class="border-0">Price</th>
                                <th class="border-0">Rating</th>
                                <th class="border-0">Description</th>
                                <th class="border-0">Facilities</th>
                                <th class="border-0">Created At</th>
                                <th class="border-0"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($hotels as $hotel)
                            <tr>
                            <td><img src="../images/{{$hotel->image}}"></td>

                            <td>{{$hotel->hotelname}}</td>
                                    <td>{{$hotel->category}}</td>
                                    <td>{{$hotel->location}}</td>
                                    <td>{{$hotel->address}}</td>
                                    <td>{{$hotel->contact}}</td>
                                    <td>{{$hotel->roomtype}}</td>
                                    <td>{{$hotel->price}}</td>
                                    <td>{{$hotel->rating}}</td>
                                    <td>{{$hotel->description}}</td>
                                    <td>{{$hotel->facilities}}</td>
                                    <td>{{$hotel->created_at}}</td>
                                    <td>
                                        <button class="btn btn-danger" name="delete"><i class="fa fa-trash"></i></button>
                                    </td>
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
