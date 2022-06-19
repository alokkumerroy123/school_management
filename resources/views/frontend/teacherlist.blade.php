@extends('layouts.frontend')
@section('main')
<div class="mt-3">
<h2 class="text-center">Lalmonirhat Gov School Teacher List</h2>
<table class="table btn btn-success">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">photo</th>

    </tr>
  </thead>
  @foreach($teacher as $key=>$teachers)
  <tbody>
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$teachers->name}}</td>
      <td>{{$teachers->phone}}</td>
      <td>{{$teachers->email}}</td>
      <td>{{$teachers->status}}</td>
      <td>
      <img src="{{asset('uploads/teacher/'.$teachers->photo)}}" width="50px"> 
      </td>

    </tr>
  </tbody>
  @endforeach
</table>
@endsection