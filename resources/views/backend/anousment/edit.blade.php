@extends('layouts.backend')
@section('main')

<div class=" row mt-3">
    <h2 class="text-center">Edit Anousment</h2>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="" method="post">
            @csrf

        <div class="mb-3">
    <label for="anousment" class="form-label">Anousment</label>
   <textarea id="anousment" name="anousment" class="form-control" rows="5">{{$anousments->anousment}}</textarea>
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
<div>



@endsection