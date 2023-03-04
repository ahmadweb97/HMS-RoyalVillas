@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">View Staff
                                <a href="{{ url('/admin/staff') }}" class="float-right btn btn-warning btn-md" >
                                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Back</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" >
                                    <tr>
                                        <th>Full Name</th>
                                        <td>{{$staff->full_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Department</th>
                                        <td>{{$staff->department->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th>
                                        <td><img width="80" src="{{asset('images/staff/'.$staff->photo)}}" /></td>
                                    </tr>
                                    <tr>
                                        <th>Bio</th>
                                        <td>{{$staff->bio}}</td>
                                    </tr>
                                    <tr>
                                        <th>Salary Type</th>
                                        <td>{{$staff->salary_type}}</td>
                                    </tr>
                                    <tr>
                                        <th>Salary Amount</th>
                                        <td>{{$staff->salary_amt}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
