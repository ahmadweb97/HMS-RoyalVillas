@extends('layout')

@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Room Type</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room Type
                <a href="{{ url('/admin/room-type/create') }}" class="float-right btn btn-primary btn-md" title="Add Room Type">
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
                            <th>Id</th>
                            <th>Title</th>
                            <th>Price($)</th>
                            <th>Gallery Image</th>
                            <th>Detail</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Price($)</th>
                            <th>Gallery Image</th>
                            <th>Detail</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($roomType)
                        @foreach ($roomType as $rt)

                        <tr>
                            <td>{{ $rt->id }}</td>
                            <td>{{ $rt->title }}</td>
                            <td>{{ $rt->price }}</td>
                            {{-- <td><img src="{{asset('images/room_type/'.$rt->photo)}}" width="110" height="50"/></td> --}}

                            <td>
                                @if ($rt->roomTypeImages)
                                    <div id="carousel-{{ $rt->id }}" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            @foreach ($rt->roomTypeImages as $key => $image)
                                                <li data-target="#carousel-{{ $rt->id }}" data-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach ($rt->roomTypeImages as $key => $image)
                                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                    <img src="{{ asset($image->img_src) }}"  alt="{{ $image->img_alt }}" height="65px" width="100%" class="rounded">
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-{{ $rt->id }}" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-{{ $rt->id }}" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                @endif
                            </td>


                            <td>{{ $rt->detail }}</td>
                            <td>
                                <a href="{{ url('admin/room-type/'.$rt->id) }}" class="btn btn-info btn-sm" title="Show Details">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a href="{{ url('admin/room-type/'.$rt->id.'/edit') }}" class="btn btn-warning btn-sm" title="Edit">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <a href="{{ url('admin/room-type/'.$rt->id.'/delete') }}" class="btn btn-danger btn-sm" title="Delete" onclick="confirm('Are you sure you want to delete this room type?')" >
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>

                            </td>

                        </tr>
                        @endforeach

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
