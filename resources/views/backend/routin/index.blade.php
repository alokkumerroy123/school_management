@extends('layouts.backend')
@section('main')
<h2 class="text-center">School Routin</h2>
<br><br>
<a href="{{route('add.routin')}}" class="btn btn-warning">Add New Routin</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Routin</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($routin as $key=>$routins)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        <img src="{{asset('uploads/routin/'.$routins->photo)}}" width="50px"> 
    </td>
       <td>
        <a href="{{route('delete.routin',$routins->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
{{ $routin->links() }}
</div>
<div>

@endsection