@extends('admin.index')

@section('title','Home')

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
      <div class="my-all-menu">
         <a href="admin/yp-1" class="my-card-menu">My Profile</a>
         <a href="/admin/post" class="my-card-menu">Post Article</a>
         <a href="/admin/view-posts" class="my-card-menu">View Posts</a>
         <a href="#" class="my-card-menu">Settings</a>
      </div>

      <div class="my-statistics">
         <div class="mb-4">
            <h5 class="h5 mb-2">Your posts liked</h5>
            <p class="text-muted mb-3">300 people like your posts</p>
            <div class="my-statistics-likes">
               <div></div>
            </div>
            <span>37%</span>
         </div>
         <div class="mb-4">
            <h5 class="h5 mb-2">Your posts disliked</h5>
            <p class="text-muted mb-3">15 people dislike your posts</p>
            <div class="my-statistics-dislikes">
               <div></div>
            </div>
            <span>5%</span>
         </div>
         <div class="text-right">
            <a href="#" class="btn btn-primary">see statistics</a>
         </div>
      </div>
      

   </article>
</section>
@endsection