@extends('layout')

@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Room Type
                <a href="{{ url('/admin/room-type') }}" class="float-right btn btn-warning btn-md" >
                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    Back</a>
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
                <form action="{{ url('admin/room-type/'.$roomType->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <table class="table table-striped" >
                    <tr>
                        <th>Title</th>
                        <td><input type="text" value="{{ $roomType->title }}" name="title" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Price($)</th>
                        <td><input type="text"  value="{{ $roomType->price }}" name="price" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Detail</th>
                        <td>
                            <textarea name="detail" id="" cols="30" rows="10" class="form-control">{{ $roomType->detail }} </textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Gallery Images</th>

                                    <td>
                                        <table class="table table-bordered mt-3">
                                        <input type="hidden" name="prev_photo" value="{{$roomType->photo}}" />
                                      {{--   <img width="100" src="{{asset('images/room_type/'.$roomType->photo)}}" /> --}}

                                        <tr>
                                            <input type="file" multiple name="photo[]" />
                                            @foreach($roomType->roomTypeImages as $img)
                                            <td class="imgcol{{$img->id}}">
                                                <img width="150" src="{{asset($img->img_src)}}" alt="{{ $img->img_alt }}"/>
                                                <p class="mt-2">
                                                        <a href="{{ url('admin/room-type-image/'.$img->id.'/delete') }}" class="d-block text-danger">Remove</a>
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </table>
                                    </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-success btn-md" value="Update">
                        </td>
                    </tr>
                </table>
            </form>
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
@endsection
