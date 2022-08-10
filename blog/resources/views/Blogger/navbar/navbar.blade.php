<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top shadow-sm">
<div class="container">
<a class="navbar-brand" href="{{route('bloggerDash')}}">
<img  src="https://www.svgrepo.com/show/25163/blogger.svg" alt="Logo"  width="40" height="40"> &nbsp; &nbsp; Blogsite</span> 
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-target="#demo-drop" href="#"><img  src="img/{{Session::get('image')}}" alt="profile pic"  width="40" height="40" class="rounded-circle"></a>
          <ul class="dropdown-menu" id="dot-drop">
          <li>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp; View Profile</a>
         </li>
         <div class="dropdown-divider"></div>
         <li class="logout">
          <a class="dropdown-item" href="{{route('bloggerLogout')}}"><i class="fa fa-power-off"></i> &nbsp;Logout</a>
         </li>
          </ul>
        </li>
    </ul>
</div>
</div>
</nav>