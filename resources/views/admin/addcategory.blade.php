@extends('admin.layouts.admin')

@section('content')
<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Add Category</h3>

            </div>
            <div class="card">
                <h5 class="card-header">Add Category</h5>
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
                <div class="card-body">
                <form method="POST" action="{{route('admin.category')}}">
                    @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Category</label>
                            <input id="inputText3" type="text" class="form-control" name="category">
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
