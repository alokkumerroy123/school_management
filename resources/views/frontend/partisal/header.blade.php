<div>

      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}"><div class="btn btn-success">হোম পেজ</div></a>
       
        @if(auth()->user())
        <a class="nav-link" href="{{route('student.profile')}}"><div class="btn btn-warning">প্রোফাইল</div></a>
        <a class="nav-link" href="{{route('school.notic')}}"><div class="btn btn-danger">নোটিসবোর্ড</div></a>
        <a class="nav-link" href="{{route('student.connect')}}"><div class="btn btn-info">যোগাযোগ</div></a>
        <a class="nav-link" href="{{route('logout')}}"><div class="btn btn-info">Logout</div></a>
        @else
        <a class="nav-link" href="{{route('rge')}}"><div class="btn btn-primary">Registration</div></a>
        <a class="nav-link" href="{{route('login')}}"><div class="btn btn-info">Login</div></a>
        @endif
       
      </nav>
    </div>