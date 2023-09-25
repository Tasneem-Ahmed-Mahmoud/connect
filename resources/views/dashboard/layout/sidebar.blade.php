<div class="wrapper  ">
    <nav id="sidebar" class=" ">
      <div class="sidebar-header">
        <h3 class='text-center'>Admin  </h3>
      </div>
      <ul class="list-unstyled components ">
      
      <li class="nav-item active">
      
          <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-home"></i>
            Home
        </a>
        </li>
        <hr>
        <li>
          <a href="{{route('dashboard.projects.index')}}">
          <i class="fas fa-briefcase"></i>
            Projects
          </a>
        </li>
        <hr>
        <!-- <li>
          <a href="{{route('dashboard.services.index')}}">
          <i class="fa-solid fa-images"></i>
            Gallery
          </a>
        </li> -->
        
        <li>
          <a href="{{route('dashboard.services.index')}}">
          <i class="fa-solid fa-hands-holding-child"></i>
            Services 
          </a>
        </li>
<hr>
        <li>
          <a href="{{route('dashboard.partners.index')}}">
          <i class="fa-solid fa-handshake-angle"></i>
            Parteners
          </a>
        </li>


        <hr>
        <li>
          <a href="{{route('dashboard.videos.index')}}">
          <i class="fa-solid fa-address-book"></i>
           Videos
          </a>
        </li>
<hr>
        <li>
          <a href="{{route('dashboard.contacts.index')}}">
          <i class="fa-solid fa-address-book"></i>
           Contact
          </a>
        </li>
      </ul>
    </nav>
    <div class='sidebar-toggler bg-white d-flex'>
      <nav class="  ">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn ">
            <i class="fas fa-align-left"></i>
           
          </button>
          
        </div>
      </nav>
   
    </div>
    <div class="content w-100 ">
@yield('content')
</div>
  </div>