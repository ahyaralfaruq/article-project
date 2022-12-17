@extends('welcome')

@section('title','Home')

@section('content')
<section id="home">

   <section id="myCarouselNews" class="position-relative w-100">
      <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
         <div class="carousel-inner h-100">
            <div class="carousel-item h-100 active">
               <img src={{ asset("img/asd.png") }} class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item h-100">
               <img src={{ asset("img/avatar.png") }} class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item h-100">
               <img src={{ asset("img/sabo-ace.jpg") }} class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item h-100">
               <img src={{ asset("img/sasori-family.png") }} class="d-block w-100" alt="...">
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

   <section class="content">
      <aside class="my-sidebar">
         <h4 class="h4 mb-3">Berita Terkini</h4>
      </aside>
      <article class="my-article">
         @foreach($arr as $data)
            <a href="/posts/post-artikel-1" class="text-dark cursor-pointer text-decoration-none">
               <div class="my-articles-card mb-3">
                  <div class="my-articles-pict">
                     <div class="my-articles-img-wrapper">
                        <img src={{ asset("../img/avatar.png") }} alt="">
                     </div>
                  </div>
                  <div class="my-articles-desc pl-2 pb-2">
                     <h4 class="h4">Judul artikel</h4>
                     <p class="text-muted">update tanggal</p>
                     <p class="p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim dicta animi error cupiditate illum quidem voluptatum eveniet veniam assumenda sed, labore nobis odio eaque culpa! Officiis incidunt nam odit aspernatur!</p>
                     <div class="my-articles-actions">
                        <div class="d-inline mr-2">
                           <i class="far fa-thumbs-up"></i>
                           <span class="text-muted">1068</span>
                        </div>
                        <div class="d-inline mr-2">
                           <i class="far fa-thumbs-down"></i>
                           <span class="text-muted">12</span>
                        </div>
                     </div>
                  </div>
               </div>
            </a>
         @endforeach
   
         <!-- <h1>This is a home page</h1>
         @foreach($arr as $data)
            <span>{{$loop->iteration}}</span>
            <span class="test">{{$data}}</span>
         @endforeach -->
      </article>
   </section>
</section>
@endsection