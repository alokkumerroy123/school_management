@extends('layouts.frontend')
@section('main')
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 mt-5">
					<h1 class="text-center md-3">Regestration</h1>
					<form action="" method="post" enctype="multipart/form-data">
						@csrf
						  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{old('name')}}">
   
  </div>
  			  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="phone"  placeholder="Enter your phone number" value="{{old('phone')}}">
   
  </div>
  <div class="mb-3">
  <label for="class" class="form-label">Class</label>
  <select name="class" class="form-control" id="class" >
          <option value="class">1</option>
          <option value="class">2</option>
          <option value="class">3</option>
          <option value="class">4</option>
          <option value="class">5</option>
          <option value="class">6</option>
          <option value="class">7</option>
          <option value="class">8</option>
          <option value="class">9</option>
          <option value="class">10</option>

        </select>
   
  </div>
   			  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <textarea name="address" id="address" class="form-control" placeholder="Enter your address">{{old('address')}}</textarea>
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter your email" value="{{old('email')}}">
     
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
    
  </div>

    <div class="mb-3">
    <label for="c_password" class="form-label">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" >
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
				
			</div>
		</div>

	
	@endsection