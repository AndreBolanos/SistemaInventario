<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width,maximum-scale=1.0,user-scalable=no,initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ mix('css/home.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/48be5f5ef0.js" crossorigin="anonymous"></script>
  <script src="{{ mix('js/app.js') }}"></script>


</head>

<body onload="myFunction()" class="container-fluid" style="padding-left: 0px;padding-right: 0px;margin:0;">

  <div id="loader"></div>

  <div id="myDiv" class="animate-bottom">

    <div id="mySidenav" class="sidenav">
      <div class="row">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      </div>
      <div id="userC" class="row mx-auto justify-content-center">
        <span id="userI">
          <i class="fas fa-user-circle"></i>
        </span>
      </div>
      <div class="row justify-content-end">
        <span id="confg">
          <i class="fas fa-cog"></i>
        </span>
      </div>
      <br>
      <h4 style="color: whitesmoke; margin-left:25px;">Menu</h4>
      <hr style="background-color: whitesmoke;margin-top:0px;margin-left:20px;margin-right:20px;">
      <ul>
        <li><a class="menuO" href="#">Resumen de Inventario</a></li>
        <li><a class="menuO" href="#">Detalle de Inventario</a>
        <li><a class="menuO" href="#">Clients</a>
        <li><a class="menuO" href="#">Contact</a>
      </ul>


    </div>

    <div id="main">
      <nav id="navbarE" class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">SPS - Sistema de Inventario</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
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
  </div>
  <script>
    var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "265px";
  document.getElementById("menuB").className = "animateHide";
  if($(window).width() <= 480){
    

    function menu(subject, callback) {
      document.getElementById("mySidenav").style.width = "100%";
      callback();
    }
    
    menu('hide', function() {
      setTimeout(function(){ document.getElementById("main").style.display = "none"; }, 500);
      
    });
    
  }
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("main").style.display = "block";
  document.getElementById("menuB").className = "animateShow";
}



var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Arma de Fuego', 'Chaleco de Seguridad', 'Linterna', 'Uniformes'],
        datasets: [{
            label: 'Activo',
            backgroundColor: 'rgb(255, 200, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [10, 5, 2, 20],
            
        },
        {
          label: 'Inactivo',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [2, 20, 30, 45],
          
      }
        ],
    },

    // Configuration options go here
    options: {responsive: true}
});

  </script>


</body>

</html>