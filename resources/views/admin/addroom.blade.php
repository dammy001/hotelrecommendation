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
                    <form>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Hotel Name</label>
                            <input id="inputText3" type="text" class="form-control" name="hotelname">
                        </div>
                        <div class="form-group">
                                <label for="inputText3" class="col-form-label">Room Name</label>
                                <input id="inputText3" type="text" class="form-control" name="category">
                            </div>
                        <div class="form-group">
                                <label for="inputText3" class="col-form-label">Guest</label>
                                <input id="inputText3" type="text" class="form-control" name="location">
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlTextarea2">Facilities</label>
                                <textarea class="form-control" name="facilities" id="exampleFormControlTextarea2" rows="3"></textarea>
                            </div>

                                <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Price</label>
                                        <input id="inputText3" type="text" class="form-control" name="price">
                                </div>

                        <div class="custom-file mb-3">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Image</label>
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
