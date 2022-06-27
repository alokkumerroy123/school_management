@extends('layouts.backend')
@section('main')
<div class="container">
 <div class="row">
  <h1 class="text-center md-3">Add New Student</h1>
  <div class="col-md-6">
    <h3 class="text-center">Student Details</h3>

 <form action="{{route('student.list')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
     
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
     
@error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
     
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="denomination" class="form-label">Class</label>
    <select name="denomination" class="form-control @error('denomination') is-invalid @enderror" id="denomination" >
          <option value="six">Six</option>
          <option value="seven">Seven</option>
          <option value="eight">Eight</option>
          <option value="nine">Nine</option>
          <option value="ten">Ten</option>
        </select>
         
@error('denomination')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
   <textarea id="address" name="address" class="form-control  @error('address') is-invalid @enderror" rows="5"></textarea>
   @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="roll" class="form-label">Roll</label>
    <input type="number" class="form-control @error('roll') is-invalid @enderror" id="roll" name="roll">
     
@error('roll')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  <div class="mb-3">
    <label for="photo" class="form-label">Photo</label>
     <input type="file" class="form-control" id="photo" name="photo">
      @error('photo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
   
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
    </div>
    <div class="col-md-6">
    <h3 class="text-center">All Student</h3>
    <table class="table">
      <thead>
        <tr>

          <th scope="col">Serial</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Photo</th>
        </tr>
      </thead>

      <tbody>
        @foreach($students as $key=>$student)
        
        <tr>
        <th scope="row">{{$key+1}}</th>
          <td>{{$student->name}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->phone}}</td>
          <td>
		<img src="{{asset('uploads/students/'.$student->photo)}}" width="50px"></img>
	    	</td>
         

        </tr>
        @endforeach
      
      
      </tbody>
      
    </table>
    {{ $students->links() }}
   

  </div>


</div>
</div>




@endsection


