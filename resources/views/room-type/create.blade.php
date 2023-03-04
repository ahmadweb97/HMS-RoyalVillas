@extends('layout')

@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Room Type
                <a href="{{ url('/admin/room-type') }}" class="float-right btn btn-warning btn-md" >
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
                <form action="{{ url('admin/room-type') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <table class="table table-striped" >

                    <tr>
                        <th>Title</th>
                        <td><input type="text" name="title" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Price($)</th>
                        <td><input type="text" name="price" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Detail</th>
                        <td>
                            <textarea name="detail" id="" cols="30" rows="10" class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Gallery</th>
                        <td>
                            <input type="file" class="form-control" multiple name="photo[]">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-success btn-md">
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
