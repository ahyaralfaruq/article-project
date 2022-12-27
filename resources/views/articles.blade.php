@extends('welcome')

@section('title', 'News')
@section('content')
<div class="row">
   <!-- foreach here -->
   @foreach($arr as $data)
   <div class="d-flex align-items-stretch col-lg-4 col-md-4 col-sm-12 pt-5">
      <a href="/posts/{{$data->slug}}" class="text-dark cursor-pointer text-decoration-none">
         <div class="my-articles-card mb-3 h-100">
            <div class="my-articles-pict">
               <div class="my-articles-img-wrapper">
                  <img src={{ asset("../img/$data->image") }} alt={{ $data->image }}>
               </div>
            </div>
            <div class="my-articles-desc px-2 pb-2 pt-4">
               <h4 class="h4">{{$data->title}}</h4>
               <p class="d-block" style="font-size:14px">
                  Author by <a href="/author/{{ $data->author->username }}" class="text-decoration-none cursor-pointer d-inline">{{ $data->author->name }}</a> | published at {{ $data->published_at }}
               </p>
               <p class="p my-text">{{ $data->description }}</p>
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
   @endforeach
</div>
@endsection