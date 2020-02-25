@extends('admin.layouts.admin')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">All Categories</h5>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">Categories</th>

                                <th class="border-0"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($categories as $category)
                            <tr>

                                    <td>{{$category->categories}}</td>
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
