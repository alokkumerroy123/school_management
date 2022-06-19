<div>
      <h3 class="float-md-start mb-0">My School Website</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>

        @if(auth()->user())
        <a class="nav-link" href="{{route('student.profile')}}">Profile</a>
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
        <a class="nav-link" href="{{route('teacher.list')}}">Teacher</a>
        <a class="nav-link" href="{{route('school.notic')}}">Notic</a>
        @else
        <a class="nav-link" href="{{route('rge')}}">Registration</a>
        <a class="nav-link" href="{{route('login')}}">Login</a>
        @endif
       
      </nav>
    </div>