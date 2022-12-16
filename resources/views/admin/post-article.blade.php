@extends('admin.index')

@section('title','Post Article')

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
               <label for="name">Title of Article</label>
               <input type="text" class="form-control" id="name" aria-describedby="nameHelp" value="Muhammad Ahyar">
               <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
               <textarea name="description" id="description" rows="8" class="form-control" placeholder="description..."></textarea>
            </div>
         </div>
         <div class="text-center mb-3">
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
         </div>
      </form>

   </article>
</section>
@endsection