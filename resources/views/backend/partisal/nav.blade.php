<div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.teacher')}}">
              <span data-feather="file"></span>
              Add Teacher
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('anousment')}}">
              <span data-feather="bar-chart-2"></span>
              Notice Board
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="{{route('show.message')}}">
              <span data-feather="layers"></span>
              Message
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('routin')}}">
              <span data-feather="users"></span>
              Class Routen
            </a>
          </li>
       
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>