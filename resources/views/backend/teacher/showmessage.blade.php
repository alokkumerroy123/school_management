@extends('layouts.backend')
@section('main')
<div class="mt-3">
    <h2 class="text-center">Student Message</h2>

<table class="table btn btn-warning">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>

    </tr>
  </thead>
  <tbody>
  @foreach($ovejog as $key=>$ovejogs)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$ovejogs->name}}</td>
      <td>{{$ovejogs->email}}</td>
      <td>{{$ovejogs->subject}}</td>
      <td>{{$ovejogs->message}}</td>
    </tr>
    @endforeach
  </tbody>

</table>
{{ $ovejog->links() }}
@endsection