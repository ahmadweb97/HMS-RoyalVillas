@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">View Services
                                <a href="{{ url('admin/service') }}" class="float-right btn btn-warning btn-md" >
                                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Back</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" >
                                    <tr>
                                        <th>Title</th>
                                        <td>{{$service->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th>
                                        <td><img width="40%" src="{{asset('images/services/'.$service->photo)}}" class="rounded" /></td>
                                    </tr>
                                    <tr>
                                        <th>Small Detail</th>
                                        <td>{{$service->small_desc}}</td>
                                    </tr>
                                    <tr>
                                        <th>Full Detail</th>
                                        <td>{{$service->detail_desc}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
