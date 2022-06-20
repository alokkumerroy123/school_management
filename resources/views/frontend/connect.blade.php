@extends('layouts.frontend')
@section('main')
<h2 class="text-center">Send Your Message</h2>
<form action="" method="">
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" placeholder="Enter your name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
  </div>
  <div class="mb-3">
    <label for="subject" class="form-label">Subject</label>
    <input type="text" class="form-control" id="subject">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <textarea name="message" id="message" class="form-control" placeholder="Enter your message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection