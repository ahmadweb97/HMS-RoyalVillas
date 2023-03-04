@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Banner
                                <a href="{{ url('admin/banner') }}" class="float-right btn btn-warning btn-md" >
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
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/banner/'.$banner->id)}}">
                                    @csrf
                                    @method('put')
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Banner Image<span class="text-danger">*</span></th>
                                            <td>
                                                <input name="banner_src" type="file" required />

                                                <input type="hidden" name="prev_photo" value="{{$banner->banner_src}}" />
                                                <img width="100" src="{{asset('images/banners/'.$banner->banner_src)}}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Alt Text <span class="text-danger">*</span></th>
                                            <td><input value="{{$banner->alt_text}}" name="alt_text" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Publish Status<span class="text-danger">*</span></th>
                                            <td><input {{ $banner->publish_status=='1' ? 'checked':'' }} name="publish_status" type="checkbox" /></td>
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
