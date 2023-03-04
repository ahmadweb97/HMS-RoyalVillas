@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Department
                                <a href="{{ url('admin/department') }}" class="float-right btn btn-warning btn-md" >
                                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Back</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif
                            <div class="table-responsive">
                                <form method="post" action="{{url('admin/department')}}">
                                    @csrf
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Title</th>
                                            <td><input name="title" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Detail</th>
                                            <td>
                                                <textarea name="detail" class="form-control"></textarea>
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
