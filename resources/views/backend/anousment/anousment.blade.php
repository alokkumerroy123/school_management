@extends('layouts.backend')
@section('main')
<div class="mt-3">
	<h2 class="text-center">Add School Anousment </h2>
	<a href="{{route('add.anousment')}}" class="btn btn-success">Add New Anousment</a>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Anousment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($anousment as $key=>$anousments)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$anousments->anousment}}</td>
      <td>
        <a href="{{route('anousment.edit',$anousments->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{route('anousment.delete',$anousments->id)}}" class="btn btn-danger">Delete</a>
      </td>
   
    </tr>
    @endforeach
   
</table>

	
</div>
@endsection