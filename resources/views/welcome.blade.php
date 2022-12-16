<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel | @yield('title')</title>

   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <header id="header">
      <div class="bg-light mynav">
         <nav class="navbar navbar-expand-lg navbar-light bg-light mynav-nav container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
   
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
               <ul class="navbar-nav flex-shrink-0">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">
                        <!-- <i class="fas fa-home"></i> -->
                        Home
                     </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="#">Articles</a>
                  </li>
                  <li class="nav-item dropdown">
                        <a class="nav-link" href="#">About us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                     </a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0 mr-3 w-100">
                  <input class="form-control mr-sm-2 flex-grow-1" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                     <i class="fas fa-search"></i>
                  </button>
               </form>
            </div>
         </nav>
      </div>
   </header>
   
   <main class="container" id="main">
      <section id="myCarouselNews" class="position-relative w-100">
         <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
            <div class="carousel-inner h-100">
               <div class="carousel-item h-100 active">
                  <img src="../img/asd.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item h-100">
                  <img src="img/avatar.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item h-100">
                  <img src="img/sabo-ace.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item h-100">
                  <img src="img/sasori-family.png" class="d-block w-100" alt="...">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      
      @yield('content')
   </main>

   <!-- bootstrap js -->
   <script src="js/jquery-3.4.1.min.js"></script>
   <script src="js/all.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>