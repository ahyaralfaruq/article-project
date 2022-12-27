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
            <a href="/posts/{{$data->slug}}" class="text-dark cursor-pointer text-decoration-none">
               <div class="my-articles-card mb-3">
                  <div class="my-articles-pict">
                     <div class="my-articles-img-wrapper">
                        <img src={{ asset("../img/avatar.png") }} alt="">
                     </div>
                  </div>
                  <div class="my-articles-desc pl-2 pb-2 pt-4">
                     <h4 class="h4">{{$data->title}}</h4>
                     <p class="d-block" style="font-size:14px">
                        Author by <a href="/author/{{ $data->author->username }}" class="text-decoration-none cursor-pointer d-inline">{{ $data->author->name }}</a> | published at {{ $data->published_at }}
                     </p>
                     <p class="p">
                        {{$data->excerpt}}
                     </p>
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
         
      </article>
   </section>
</section>
@endsection