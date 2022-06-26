@extends('layouts.backend')
@section('main')
<h2 class="text-center">Add Routin</h2>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="photo" class="form-label">Photo</label>
     <input type="file" class="form-control" id="photo" name="photo">
      @error('photo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection