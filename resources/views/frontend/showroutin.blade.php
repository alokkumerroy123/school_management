@extends('layouts.frontend')
@section('main')
<div class="mt-3">
<h2 class="text-center">Lalmonirhat Gov School Routin</h2>
<table class="table btn btn-success">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>

    </tr>
  </thead>
  @foreach($routin as $key=>$routins)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        <img src="{{asset('uploads/routin/'.$routins->photo)}}" width="50px"> 
    </td>
  @endforeach
</table>
{{ $routin->links() }}
</div>
@endsection