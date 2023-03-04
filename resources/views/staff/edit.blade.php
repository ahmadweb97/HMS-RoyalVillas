@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Staff
                                <a href="{{ url('/admin/staff') }}" class="float-right btn btn-warning btn-md" >
                                   <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Back</a>
                            </h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <form enctype="multipart/form-data" method="post" action="{{url('admin/staff/'.$staff->id)}}">
                                    @method('put')
                                    @csrf
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Full Name</th>
                                            <td><input value="{{$staff->full_name}}" name="full_name" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Select Department</th>
                                            <td>
                                                <select name="department_id" class="form-control">
                                                    <option value="0">--- Select ---</option>
                                                    @foreach($department as $dp)
                                                    <option @if($staff->id==$dp->id) selected @endif value="{{$dp->id}}">{{$dp->title}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Photo</th>
                                            <td>
                                                <input name="photo" type="file" required/>
                                                <input type="hidden" value="{{$staff->photo}}" name="prev_photo" />
                                                <img width="80" src="{{asset('images/staff/'.$staff->photo)}}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Bio</th>
                                            <td><textarea class="form-control" name="bio">{{$staff->bio}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <th>Salary Type</th>
                                            <td>
                                                <input @if($staff->salary_type=='daily') checked @endif type="radio" name="salary_type" value="daily"> Daily
                                                <input @if($staff->salary_type=='monthly') checked @endif type="radio" name="salary_type" value="monthly"> Monthly
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Salary Amount($)</th>
                                            <td><input value="{{$staff->salary_amt}}" name="salary_amt" class="form-control" type="number" /></td>
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
