@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">View Bookings
                                <a href="{{ url('admin/booking') }}" class="float-right btn btn-warning btn-md" >
                                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Back</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" >


                                    <tr>
                                        <th>Customer</th>
                                        @if($data->customer)
                                            <td>{{$data->customer->full_name}}</td>
                                        @else
                                            <td>Not Found</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Room No.</th>
                                        @if ($data->room)
                                        <td>{{ $data->room->title }}</td>
                                        @else
                                        <td>Not Found</td>

                                        @endif
                                    </tr>

                                    <tr>
                                        <th>CheckIn Date</th>
                                        <td>{{$data->checkin_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>CheckOut Date</th>
                                        <td>{{$data->checkout_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Adults</th>
                                        <td>{{$data->total_adults}}</td>
                                    </tr>
                                    <tr>
                                        <th>Children</th>
                                        <td>{{$data->total_children}}</td>
                                    </tr>
                                    <tr>
                                       <th>Ref</th>
                                        <td>{{$data->ref}}</td>
                                    </tr>



                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
