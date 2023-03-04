@extends('layout')

@section('content')
<style>
    .card-body-no-padding {
        padding: 0;
        display: none
    }
    .card-img-bottom {
        margin-bottom: 0;
    }
    .bottomcard{
        display: none
    }
</style>
   <!-- Begin Page Content -->
   <div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Room Type
                <a href="{{ url('/admin/room-type') }}" class="float-right btn btn-warning btn-md" >
                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    Back</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ url('admin/room-type') }}" method="POST">
                    @csrf
                <table class="table table-striped" >
                    <tr>
                        <th>Title</th>
                      <td>{{ $roomType->title }}</td>
                    </tr>
                    <tr>
                        <th>Price($)</th>
                      <td>{{ $roomType->price }}</td>
                    </tr>
                    <tr>
                        <th>Detail</th>
                        <td>{{ $roomType->detail }}</td>

                    </tr>
                    <tr>
                        <th>Gallery Image</th>

                        <td>


                 <!-- Add the modal HTML to the bottom of your page -->
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryModalLabel">{{ $roomType->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselModal" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($roomType->roomTypeImages as $key => $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset($image->img_src) }}" class="d-block w-100" alt="{{ $image->img_alt }}">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselModal" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselModal" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add the card HTML with a data-target attribute that points to the modal -->
@if ($roomType->roomTypeImages)
    <div class="row">
        @foreach ($roomType->roomTypeImages as $image)
            <div class="col-md-4 mb-3">
                <div class="card" data-toggle="modal" data-target="#galleryModal">
                    <img src="{{ asset($image->img_src) }}" class="card-img-top card-img-bottom" alt="{{ $image->img_alt }}">
                    <div class="card-body bottomcard">
                        <h5 class="card-title">{{ $roomType->name }}</h5>
                        <p class="card-text">{{ $roomType->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif



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
