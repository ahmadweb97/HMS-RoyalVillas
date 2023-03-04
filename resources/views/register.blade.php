@extends('frontend_layout')
@section('content')
<div class="container my-4">
	<h3 class="mb-3">Register</h3>
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success! </strong> {{ Session('message') }}
    </div>
  @endif
	<form method="post" action="{{url('customer/register')}}">
		@csrf
		<table class="table table-striped">
			<tr>
				<th>Full Name<span class="text-danger">*</span></th>
				<td><input required type="text" class="form-control" name="full_name"></td>
			</tr>
			<tr>
				<th>Email<span class="text-danger">*</span></th>
				<td><input required type="email" class="form-control" name="email"></td>
			</tr>
			<tr>
				<th>Password<span class="text-danger">*</span></th>
				<td><input required type="password" class="form-control" name="password"></td>
			</tr>
			<tr>
				<th>Mobile<span class="text-danger">*</span></th>
				<td><input required type="number" class="form-control" name="mobile"></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><input type="text" class="form-control" name="address"></td>
			</tr>
			<tr>
				<input type="hidden" name="ref" value="front" />
				<td colspan="2"><input type="submit" class="btn btn-success" /></td>
			</tr>
		</table>
	</form>
</div>
@endsection
