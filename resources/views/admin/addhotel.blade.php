@extends('admin.layouts.admin')

@section('content')
<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Add Hotel</h3>

            </div>
            <div class="card">
                <h5 class="card-header">Add Hotel</h5>
                <div class="card-body">
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
                <form method="POST" action="{{route('admin.addhotel')}}">
                    @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Hotel Name</label>
                            <input id="inputText3" type="text" class="form-control" name="hotelname">
                        </div>
                        <div class="form-group">
                                <label for="inputText3" class="col-form-label">Category</label>
                                <input id="inputText3" type="text" class="form-control" name="category">
                            </div>
                        <div class="form-group">
                                <label for="inputText3" class="col-form-label">Location</label>
                                <input id="inputText3" type="text" class="form-control" name="location">
                        </div>
                        <div class="form-group">
                                <label for="inputText3" class="col-form-label">Address</label>
                                <input id="inputText3" type="text" class="form-control" name="address">
                            </div>
                            <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Contact</label>
                                    <input id="inputText3" type="text" class="form-control" name="contact">
                                </div>
                                <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Room Type</label>
                                        <input id="inputText3" type="text" class="form-control" name="roomtype">
                                </div>
                                <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Price</label>
                                        <input id="inputText3" type="text" class="form-control" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea2">Facilities</label>
                                    <textarea class="form-control" name="facilities" id="exampleFormControlTextarea2" rows="3"></textarea>
                                </div>

                        <div class="form-group">
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
