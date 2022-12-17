@extends('welcome')

@section('title', 'News')
@section('content')
   <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12 pt-5">
      <!-- foreach here -->
      <a href="posts/judul-post-1" class="text-dark cursor-pointer text-decoration-none">
         <div class="my-articles-card mb-3">
            <div class="my-articles-pict">
               <div class="my-articles-img-wrapper">
                  <img src={{ asset("../img/avatar.png") }} alt="">
               </div>
            </div>
            <div class="my-articles-desc pl-2 pb-2 pt-4">
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
   </div>
@endsection