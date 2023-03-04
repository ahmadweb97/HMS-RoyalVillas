@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">All Bookings
                                    <a href="{{ url('admin/booking/create') }}" class="float-right btn btn-primary btn-md" title="Add Booking">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Create</a>
                                </h6>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Success! </strong> {{ Session('message') }}
                            </div>
                          @endif
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer</th>
                                            <th>Room No.</th>
                                            <!-- <th>Room Type</th> -->
                                            <th>CheckIn Date</th>
                                            <th>CheckOut Date</th>
                                            <th>Ref</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer</th>
                                            <th>Room No.</th>
                                            <!-- <th>Room Type</th> -->
                                            <th>CheckIn Date</th>
                                            <th>CheckOut Date</th>
                                            <th>Ref</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $booking)
                                        <tr>
                                            <td>{{$booking->id}}</td>
                                            @if($booking->customer)
                                                <td>{{$booking->customer->full_name}}</td>
                                            @else
                                                <td>Not Found</td>
                                            @endif
                                            <td>{{$booking->room->title}}</td>
                                            <td>{{$booking->checkin_date}}</td>
                                            <td>{{$booking->checkout_date}}</td>
                                            <td>{{$booking->ref}}</td>
                                            <td>
                                                <a href="{{url('admin/booking/'.$booking->id)}}" class="text-info btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="{{url('admin/booking/'.$booking->id.'/delete')}}" class="text-danger" onclick="return confirm('Are you sure you want to delete this booking?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @section('script')

                <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
                    <!-- Page level plugins -->
                    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
                    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

                    <!-- Page level custom scripts -->
                    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
                    @endsection


                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                @endsection
