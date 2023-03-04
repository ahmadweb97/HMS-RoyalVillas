@extends('frontend_layout')
@section('content')
<style>
    .title{
        color: grey
    }
</style>
<div class="container my-4">
    <h3>Our Services</h3>
    <hr>
    <div class="row mt-3">
        @if($service)
        @foreach($service as $ser)
<div class="col-md-4 my-5">
    <div class="card shadow-lg">
    <div>
        <img src="{{asset('images/services/'.$ser->photo)}}" width="100%" height="100px" alt="" >
    </div>
	<h3 class="mb-1 mt-1 p-3 title">{{$ser->title}}</h3>
   <h6 class="p-2 m-2"> <i class="">{{ $ser->small_desc }}</i></h6>
   <hr>
	<p class="mb-3 mt-3 p-3">{{$ser->detail_desc}}</p>
</div>
</div>
@endforeach
@endif
</div>
</div>
@endsection
