<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel | @yield('title')</title>

   <!-- bootstrap css -->
   <link rel="stylesheet" href={{ asset('css/all.min.css') }}>
   <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
   <link rel="stylesheet" href={{ asset('css/style.css') }}>
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
                     <a class="nav-link" href="/">
                        <!-- <i class="fas fa-home"></i> -->
                        Home
                     </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="/posts">Articles</a>
                  </li>
                  <li class="nav-item dropdown">
                        <a class="nav-link" href="/about">About us</a>
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
      @yield('content')
   </main>

   <footer id="my-footer" class="bg-light">
      <p class="p text-bold">Alright Reserved &copy; 2022</p>
   </footer>

   <!-- bootstrap js -->
   <script src={{ asset('js/jquery-3.4.1.min.js') }}></script>
   <script src={{ asset('js/all.min.js') }}></script>
   <script src={{ asset('js/bootstrap.min.js') }}></script>
</body>
</html>