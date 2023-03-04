@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Staff
                                <a href="{{ url('/admin/staff/create') }}" class="float-right btn btn-primary btn-md" title="Add Staff">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    Create</a>
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
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Photo</th>
                                            <th>Department</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Photo</th>
                                            <th>Department</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if($staff)
                                            @foreach($staff as $st)
                                            <tr>
                                                <td>{{$st->id}}</td>
                                                <td>{{$st->full_name}}</td>
                                                <td><img width="65" height="55" class="rounded-pill mx-auto d-block" src="{{asset('images/staff/'.$st->photo)}}" /></td>
                                                <td>{{$st->department->title}}</td>
                                                <td>
                                                    <a href="{{url('admin/staff/'.$st->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/staff/'.$st->id).'/edit'}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/staff/payments/'.$st->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-credit-card" title="View Payments"></i></a>
                                                    <a onclick="return confirm('Are you sure to delete this staff?')" href="{{url('admin/staff/'.$st->id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
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

