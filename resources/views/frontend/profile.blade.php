@extends('layouts.frontend')
@section('main')
<div class="container">
 <div class="row">
  <h1 class="text-center md-3 btn btn-primary">Your Profile</h1>
  <img src="{{asset('uploads/profiles/'.auth()->user()->photo)}}" style="height:200px; border-radius:200%;" >
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <form action="{{route('student.profile')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" value="{{auth()->user()->name}}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control  @error('phone') is-invalid @enderror" id="phone"  placeholder="Enter your phone number" value="{{auth()->user()->phone}}">
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea name="address" id="address" class="form-control  @error('address') is-invalid @enderror" placeholder="Enter your address">{{auth()->user()->address}}</textarea>
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->email}}" readonly>
      </div>
      
      <div class="mb-3">
        <label for="photo" class="form-label">Photo</label>
        <input type="file" name="photo" class="form-control  @error('photo') is-invalid @enderror" id="photo">
        @error('photo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>



      <button type="submit" class="btn btn-primary">Edit</button>
</form>



@endsection