@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Zipper #{{ $volunteer_zipper->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/volunteer-zipper') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $volunteer_zipper->id }}</td>
                            </tr>
                            <tr><th> Zipper Name </th><td> {{ $volunteer_zipper->zipper_name }} </td></tr><tr><th> Phone Number </th><td> {{ $volunteer_zipper->phone_number }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

