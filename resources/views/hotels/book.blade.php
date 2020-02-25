@extends('hotels.layouts.hotel')

@section('content')
<aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url(../images/{{$roomname->image}});">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                               <div class="slider-text-inner text-center">
                                   <h2>Overview</h2>
                               <h1>{{$roomname->roomname}}</h1>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
              </ul>
          </div>
    </aside>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success">
                <i data-notify="icon" class="ion-checkmark"></i>&ensp;
                <span data-notify="message" class="text-center">{{ Session::get('success') }}</span>
            </div>
        @endif
        @if (Session::has('danger'))
            <div class="alert alert-danger">
                <i data-notify="icon" class="ion-checkmark"></i>&ensp;
                <span data-notify="message" class="text-center">{{ Session::get('danger') }}</span>
            </div>
        @endif
            <form method="POST" action="{{route('book.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Hotel Name</label>
                        <input type="text" class="form-control" name="hotelname" value="{{$roomname->hotelname}}" id="datefrom">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Room Name</label>
                        <input type="text" class="form-control" name="roomname" value="{{$roomname->roomname}}" id="datefrom">
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Price</label>
                            <input type="text" class="form-control" name="price" value="{{$roomname->price}}" id="datefrom">
                        </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Date From</label>
                      <input type="date" class="form-control" name="datefrom" id="datefrom" placeholder="Date From">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Date To</label>
                        <input type="date" class="form-control" name="dateto" id="dateto" placeholder="Date To">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Full Name</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contact</label>
                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="bookroom" id="bookroom" class="btn btn-primary">Book</button>
                    </div>

                </form>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
