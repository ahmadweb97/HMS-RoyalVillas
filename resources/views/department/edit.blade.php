@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Department
                                <a href="{{ url('admin/department') }}" class="float-right btn btn-warning btn-md" >
                                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Back</a>
                            </h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <form method="post" action="{{url('admin/department/'.$department->id)}}">
                                    @csrf
                                    @method('put')
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Title</th>
                                            <td><input value="{{$department->title}}" name="title" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Detail</th>
                                            <td>
                                                <textarea name="detail" class="form-control">{{$department->detail}}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" class="btn btn-primary" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
