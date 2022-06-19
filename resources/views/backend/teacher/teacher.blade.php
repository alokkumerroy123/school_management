@extends('layouts.backend')
@section('main')
<div class="mt-3">
    <h2 class="text-center">Lalmonirhat Gov School Teacher List</h2>
    <br><br>
    <a href="{{route('new.teacher')}}" class="btn btn-success">Add New Teacher</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($teacher as $key=>$teachers)
   
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$teachers->name}}</td>
      <td>{{$teachers->phone}}</td>
      <td>{{$teachers->email}}</td>
      <td>{{$teachers->status}}</td>
      <td>
      <img src="{{asset('uploads/teacher/'.$teachers->photo)}}" width="50px"> 
      </td>
      <td>
      <a href="{{route('admin.edit',$teachers->id)}}" class="btn btn-warning">Edit</a>
      <a href="{{route('admin.delete',$teachers->id)}}" class="btn btn-danger">Delete</a>
      </td>   
    </tr>
    @endforeach
  </tbody>
 

</table>
{{ $teacher->links() }}

</div>
@endsection