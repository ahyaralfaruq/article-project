@extends('welcome')

@section('title','Home')

@section('content')
<section class="content">
   <aside class="my-sidebar">ini adalah aside</aside>
   <article class="my-article">
      <div class="my-articles-card mb-3">
         <div class="my-articles-pict">
            <div class="my-articles-img-wrapper">
               <img src="../img/avatar.png" alt="">
            </div>
         </div>
         <div class="my-articles-desc">
            <h4 class="h4">Judul artikel</h4>
            <p class="text-muted">update tanggal</p>
            <p class="p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim dicta animi error cupiditate illum quidem voluptatum eveniet veniam assumenda sed, labore nobis odio eaque culpa! Officiis incidunt nam odit aspernatur!</p>
            <div class="my-articles-actions">
               <i class="far fa-thumbs-up"></i>
               <i class="far fa-thumbs-down"></i>
            </div>
         </div>
      </div>
      
      <!-- <h1>This is a home page</h1>
      @foreach($arr as $data)
         <span>{{$loop->iteration}}</span>
         <span class="test">{{$data}}</span>
      @endforeach -->
   </article>
</section>
@endsection