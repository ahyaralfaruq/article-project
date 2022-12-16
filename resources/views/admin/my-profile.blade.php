@extends('admin.index')

@section('title','My Profile')

@section('content')
<section class="content">
   <aside class="my-sidebar">
      <div class="my-card-pict">
         <div class="my-card-profile">
            <div class="img-wrapper">
               <img src="../img/asd.png" alt="">
            </div>
         </div>
         <div class="my-card-desc">
            <h3 class="h3 mb-3">Muhammad Ahyar</h3>
            <p class="text-muted">ahyaralfaruq97@gmail.com</p>
         </div>
      </div>
   </aside>
   <article class="my-article">
      <form action="" method="post" enctype="" class="w-100 bg-white px-2 py-2 my-profile">
         <h4 class="h4 text-center">Your Profile</h4>
         <div class="mb-3">
            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" class="form-control" id="name" aria-describedby="nameHelp" value="Muhammad Ahyar">
               <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
               <label for="phone">Username</label>
               <input type="username" class="form-control" name="username" id="username" aria-describedby="usernameHelp" value="ayar.js">
               <small id="usernameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
               <label for="phone">Phone</label>
               <input type="phone" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp">
               <small id="phoneHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
               <input type="file" name="image" id="image" aria-describedby="imageHelp">
               <small id="imageHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
         </div>
         <div class="text-center mb-3">
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
         </div>
      </form>
   </article>
</section>
@endsection