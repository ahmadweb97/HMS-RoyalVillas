@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$staff->full_name}} Payments
                                <a href="{{url('admin/staff/payment/'.$staff_id.'/add')}}" class="float-right btn btn-primary btn-md">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    Add New Payment</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Success! </strong> {{ Session('message') }}
                            </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Amount($)</th>
                                            <th>Payment Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Amount($)</th>
                                            <th>Payment Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if($staff_payment)
                                            @foreach($staff_payment as $stp)
                                            <tr>
                                                <td>{{$stp->id}}</td>
                                                <td>{{$stp->amount}}</td>
                                                <td>{{$stp->payment_date}}</td>
                                                <td>
                                                    <a onclick="return confirm('Are you sure to delete this staff payment?')" href="{{url('admin/staff/payment/'.$stp->id.'/'.$staff_id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <a href="{{ url('/admin/staff') }}" class="float-start btn btn-warning btn-md" >
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                     Back</a>
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
