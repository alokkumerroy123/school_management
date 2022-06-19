@extends('layouts.backend')
@section('main')

<div class=" row mt-3">
    <h2 class="text-center">Create Anousment</h2>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="{{route('add.anousment')}}" method="post">
            @csrf

        <div class="mb-3">
    <label for="anousment" class="form-label">Anousment</label>
   <textarea id="anousment" name="anousment" class="form-control  @error('anousment') is-invalid @enderror" rows="5">{{old('anousment')}}</textarea>
   @error('anousment')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
<div>



@endsection