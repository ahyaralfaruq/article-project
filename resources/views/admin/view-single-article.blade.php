@extends('admin.index')

@section('title','Single Article')

@section('content')
   <section class="content">
      <aside class="my-sidebar">
         <div class="my-card-pict">
            <div class="my-card-profile">
               <div class="img-wrapper">
                  <img src={{ asset("../img/asd.png") }} alt="">
               </div>
            </div>
            <div class="my-card-desc">
               <h3 class="h3 mb-3">Muhammad Ahyar</h3>
               <p class="text-muted">ahyaralfaruq97@gmail.com</p>
            </div>
         </div>
      </aside>
      <article class="my-article">
         <div class="my-articles-card mb-5">
            <div class="my-articles-pict">
               <div class="my-articles-img-wrapper">
                  <img src={{ asset("../img/avatar.png") }} alt="">
               </div>
            </div>
            <div class="my-articles-desc">
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
      </article>
   </section>
@endsection