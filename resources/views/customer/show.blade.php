
@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">View Customer
                                <a href="{{ url('admin/customer') }}" class="float-right btn btn-warning btn-md" >
                                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Back</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" >
                                    <tr>
                                        <th>FullName</th>
                                        <td>{{$customer->full_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th>
                                        <td><img width="100" src="{{asset('images/customers/'.$customer->photo)}}" /></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$customer->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td>{{$customer->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{$customer->address}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
