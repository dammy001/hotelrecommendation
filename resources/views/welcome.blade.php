@extends('layouts.home')

@section('content')
<div class="colorlib-tour colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Popular Destinations</h2>
                    <h5>See our top pick of cities visited by most guests</h5>
                </div>
            </div>
            <div class="row" style="margin-left: 15px;">
                @foreach($popularlocations as $popularlocation)
                    <div class="col-sm-3">
                    <a href="{{route('popular', $popularlocation->location)}}">
                      <div class="card" style="border: 2px solid black; padding: 10px">
                        <div class="card-body">
                        <h3 class="card-title">{{$popularlocation->location}}</h3>
                          <h5 class="card-text">6 hotels</h5>
                        </div>
                      </div>
                    </a>
                    </div>
                    @endforeach
                  </div>

        </div>

    </div>

    <div class="colorlib-tour colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Popular Hotels</h2>
                    <p>See the top popular hotels </p>
                </div>
            </div>
        </div>

        <div class="tour-wrap">
            @foreach($hotels as $hotel)
        <a href="{{route('hoteldetails', $hotel->hotelname)}}" class="tour-entry animate-box">
                    <div class="tour-img" style="background-image: url(./images/{{$hotel->image}});">
                    </div>
                    <span class="desc">
                        <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 45 Reviews</p>
                    <h2>{{$hotel->hotelname}}</h2>
                    <span class="city">{{$hotel->location}}, {{$hotel->address}}</span>
                    <span class="price">N{{$hotel->price}}</span>
                    </span>
                </a>
            @endforeach

        </div>
    </div>

    <div id="colorlib-hotel">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Recommended Hotels</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="owl-carousel">
                        @foreach($recommends as $recommend)
                            <div class="item">
                                <div class="hotel-entry">
                                <a href="{{route('hoteldetails', $recommend->hotelname)}}" class="hotel-img" style="background-image: url(./images/{{$recommend->image}});">
                                    <p class="price"><span>N{{$recommend->price}}</span><small> /night</small></p>
                                    </a>
                                    <div class="desc">
                                        <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="{{route('hoteldetails', $recommend->hotelname)}}">{{$recommend->hotelname}}</a></h3>
                                    <span class="place">{{$recommend->location}}, {{$recommend->address}}</span>
                                    <p>{{$recommend->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
