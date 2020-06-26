<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
    <script src="https://kit.fontawesome.com/48be5f5ef0.js" crossorigin="anonymous"></script>

</head>
<body class="container-fluid" style="padding-left: 0px;padding-right: 0px;">

<div id="mySidenav" class="sidenav">
  <div class="row">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
</div>
  <div class="row mx-auto justify-content-center" style="height: 200px;width:100%;line-height: 0;">
    <span style="font-size: 175px; color: whitesmoke;">
      <i class="fas fa-user-circle"></i>
    </span>
  </div>
  <h4 style="color: whitesmoke; margin-left:10px;">Menu</h4>
  <hr style="background-color: whitesmoke;margin-top:0px;">
    <ul>
    <li><a class="menuO" href="#">About</a></li>
    <li><a class="menuO" href="#">Services</a>
    <li><a class="menuO" href="#">Clients</a>
    <li><a class="menuO" href="#">Contact</a>
    </ul>
    
 
</div>

<div id="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <div id="content">
      @yield('content')
    </div>
    
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "265px";
  if($(window).width() <= 480){
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginLeft = "65%";
    
  }
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html> 