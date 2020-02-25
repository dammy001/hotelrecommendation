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
                               <h1>{{$results->count()}} Hotels in {{ request()->input('location') }}, Lagos</h1>
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
                        @foreach($results as $result)
                            <div class="col-md-6 col-sm-6 animate-box">
                                <div class="hotel-entry">
                                <a href="{{route('hoteldetails', $result->hotelname)}}" class="hotel-img" style="background-image: url(./images/{{$result->image}});">
                                <p class="price"><span>N{{$result->price}}</span><small> /night</small></p>
                                    </a>
                                    <div class="desc">
                                        <p class="star"><span>({{$result->rating}}/5)</span> 15 Reviews</p>
                                    <h3><a href="{{route('hoteldetails', $result->hotelname)}}">{{$result->hotelname}}</a></h3>
                                    <span class="place">{{$result->location}}, {{$result->address}}</span>
                                    <p>{{$result->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination">
                        <li class="active">{{$results->links()}}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- SIDEBAR-->
            <div class="col-md-3">
                <div class="sidebar-wrap">
                    <div class="side search-wrap animate-box">
                        <h3 class="sidebar-heading">Find your hotel</h3>
                        <form method="post" class="colorlib-form">
                          <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="date">Location</label>
                            <div class="form-field">
                              <i class="icon icon-location"></i>
                              <input type="text" id="location" class="form-control" placeholder="Location">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                  <label for="date">Price From:</label>
                                  <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input type="text" id="date" class="form-control date" placeholder="Price From">
                                  </div>
                                </div>
                              </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="date">Price To:</label>
                                <div class="form-field">
                                  <i class="icon icon-calendar2"></i>
                                  <input type="text" id="date" class="form-control date" placeholder="Price To">
                                </div>
                              </div>
                            </div>

                        <div class="col-md-12">
                          <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
                        </div>
                      </div>
                    </form>
                    </div>

                    <div class="side animate-box">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="sidebar-heading">Review Rating</h3>
                                <form method="post" class="colorlib-form-2">
                                   <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="5">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="4">
                                      <label class="form-check-label" for="exampleCheck1">
                                           <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                      </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1"  value="3">
                                      <label class="form-check-label" for="exampleCheck1">
                                          <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                     </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1"  value="2">
                                      <label class="form-check-label" for="exampleCheck1">
                                          <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                     </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1">
                                      <label class="form-check-label" for="exampleCheck1">
                                          <p class="rate"><span><i class="icon-star-full"></i></span></p>
                                     </label>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="side animate-box">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="sidebar-heading">Popular Location</h3>

                                   <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Ikeja">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Ikeja</h4>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Lekki">
                                      <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Lekki</h4>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Victoria Island">
                                      <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Victoria Island</h4>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Ikoyi">
                                      <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Ikoyi</h4>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Surulere">
                                      <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Surulere</h4>
                                        </label>
                                   </div>

                            </div>
                        </div>
                    </div>
                    <div class="side animate-box">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="sidebar-heading">Facilities</h3>

                                   <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Swimming Pool">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Swimming Pool</h4>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Bar">
                                      <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Bar</h4>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Resturant">
                                      <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Restaurant</h4>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Free Wifi">
                                      <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Free Wifi</h4>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Parking Space">
                                      <label class="form-check-label" for="exampleCheck1">
                                            <h4 class="place">Parking Space</h4>
                                        </label>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="colorlib-subscribe" style="background-image: url(./images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Sign Up for a Newsletter</h2>
                <p>Sign up for our mailing list to get latest updates and offers.</p>
                <form class="form-inline qbstp-header-subscribe">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-0">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
