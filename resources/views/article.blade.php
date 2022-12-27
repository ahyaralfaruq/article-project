@extends('welcome')

@section('title', 'News')
@section('content')
   <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12 pt-5">
      <div class="my-articles-card mb-3">
         <div class="my-articles-pict">
            <div class="my-articles-img-wrapper">
               <img src={{ asset("../img/$arr->image") }} alt="">
            </div>
         </div>
         <div class="my-articles-desc pl-2 pb-2 pt-4">
            <h4 class="h4">{{ $arr->title }}</h4>
            <p class="d-block" style="font-size:14px">
               Author by <a href="/author/{{ $arr->author->username }}" class="text-decoration-none cursor-pointer d-inline">{{ $arr->author->name }}</a> | published at {{ $arr->published_at }}
            </p>
            <p class="p">{{ $arr->description }}</p>
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
   </div>
@endsection