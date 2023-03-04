@extends('layout')

@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Rooms</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rooms
                <a href="{{ url('/admin/rooms/create') }}" class="float-right btn btn-primary btn-md" title="Add Room">
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
            <div class="table-responsive ">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Room Type</th>
                            <th>Title</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Room Type</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($room)
                        @foreach ($room as $r)
                            <tr>
                                <td>{{ $r->id }}</td>
                                <td>
                                    @if (isset($r->Roomtype->title))
                                        {{ $r->Roomtype->title }}
                                    @else
                                        No room type found!
                                    @endif
                                </td>
                                <td>{{ $r->title }}</td>
                                <td>
                                    <a href="{{ url('admin/rooms/'.$r->id) }}" class="btn btn-info btn-sm" title="Show Details">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ url('admin/rooms/'.$r->id.'/edit') }}" class="btn btn-warning btn-sm" title="Edit">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ url('admin/rooms/'.$r->id.'/delete') }}" class="btn btn-danger btn-sm" title="Delete" onclick="confirm('Are you sure you want to delete this room?')" >
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No rooms found.</td>
                        </tr>
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
