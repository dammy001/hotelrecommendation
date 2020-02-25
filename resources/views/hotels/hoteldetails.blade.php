@extends('hotels.layouts.hotel')

@section('content')
<!-- Modal -->

<aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url(images/{{$hoteldetail->image}});">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                               <div class="slider-text-inner text-center">
                                   <h2>Overview</h2>
                               <h1>{{$hoteldetail->hotelname}}</h1>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
              </ul>
          </div>
    </aside>

    <div class="colorlib-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-division">
                                <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                                <h2>{{$hoteldetail->hotelname}}</h2>
                                </div>
                                <div class="row">
                                    @foreach($rooms as $room)
                                        <div class="col-md-12 animate-box">
                                            <div class="room-wrap">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="room-img" style="background-image: url(images/{{$room->image}});"></div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="desc">
                                                        <h2>{{$room->roomname}}</h2>
                                                        <p class="price"><span>N{{$room->price}}</span> <small>/ night</small></p>
                                                        <p><i class="fa fa-user-o"></i>Capacity: {{$room->guest}}</p>
                                                        <p>{{$room->facilities}}</p>
                                                        <p><a href="{{route('book', $room->roomname)}}" class="btn btn-primary">Book Now!</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
					<div class="sidebar-wrap">
                            <div class="side search-wrap animate-box">
                                    <h2 class="sidebar-heading">Description</h2>
                                    <p style="color:white; font-size: 20px;">{{$hoteldetail->description}}</p>
                            </div>
                            <div class="side search-wrap animate-box">
                                    <h2 class="sidebar-heading">Facilities</h2>
                                    <p style="color:white; font-size: 20px;">{{$hoteldetail->facilities}}</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
