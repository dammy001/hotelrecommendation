@extends('hotels.layouts.hotel')

@section('content')
<aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url(./images/cover-img-4.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                               <div class="slider-text-inner text-center">

                               <h1>Hotels In {{$location}}</h1>
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
                            <div class="wrap-division">
                                @forelse($showlocation as $show)
                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                        <a href="{{route('hoteldetails', $show->hotelname)}}" class="hotel-img" style="background-image: url(./images/{{$show->image}});">
                                        <p class="price"><span>N{{$show->price}}</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span>({{$show->rating}}/5)</span> 15 Reviews</p>
                                            <h3><a href="{{route('hoteldetails', $show->hotelname)}}">{{$show->hotelname}}</a></h3>
                                            <span class="place">{{$show->location}}, {{$show->address}}</span>
                                            <p>{{$show->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-12">
                                        <h3>No Hotel Found In {{$location}}</h3>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul class="pagination">
                                <li class="active">{{$showlocation->links()}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
