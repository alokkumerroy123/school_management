@extends('layouts.frontend')
@section('main')
<div class="mt-3">
    <h2 class="text-center">Lalmonirhat Gov School Notic Board</h2>

<table class="table btn btn-warning">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Notic</th>

    </tr>
  </thead>
  <tbody>
  @foreach($anousments as $key=>$anousment)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$anousment->anousment}}</td>
    </tr>
    @endforeach
  </tbody>

</table>
{{ $anousments->links() }}
</div>

@endsection