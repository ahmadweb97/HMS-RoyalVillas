@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Service
                                <a href="{{ url('admin/service') }}" class="float-right btn btn-warning btn-md" >
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
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/service/'.$service->id)}}">
                                    @csrf
                                    @method('put')
                                    <table class="table table-striped" >
                                        <tr>
                                            <th>Title <span class="text-danger">*</span></th>
                                            <td><input value="{{$service->title}}" name="title" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Small Desc <span class="text-danger">*</span></th>
                                            <td><textarea name="small_desc" class="form-control">{{$service->small_desc}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Detail Desc <span class="text-danger">*</span></th>
                                            <td><textarea name="detail_desc" class="form-control">{{$service->detail_desc}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Photo</th>
                                            <td>
                                                <input name="photo" type="file" />
                                                <input type="hidden" name="prev_photo" value="{{$service->photo}}" />
                                                <img width="50%" src="{{asset('images/services/'.$service->photo)}}" class="rounded"/>
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
