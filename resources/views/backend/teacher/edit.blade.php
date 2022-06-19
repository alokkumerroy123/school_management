@extends('layouts.backend')
@section('main')
<div class="row mt-3">
    <h2 class="text-center">Edit Teacher Information</h2>
    <div class="col-md-3"></div>
    <div class="col-md-6">

 <form action="{{route('admin.edit',$teacher->id)}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value={{$teacher->name}}>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" value={{$teacher->phone}}>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value={{$teacher->email}}>
  </div>

  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" class="form-control" id="status" value={{$teacher->status}}>
          <option value="Bangla">Bangla</option>
          <option value="English">English</option>
          <option value="Math">Math</option>
          <option value="Ict">ICT</option>
          <option value="Physics">Physics</option>
          <option value="Chemistry">Chemistry</option>
         
        </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
</div>
@endsection