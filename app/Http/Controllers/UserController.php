<?php

   namespace App\Http\Controllers;

   use App\Models\Articles;
   use App\Models\User;

   class UserController extends Controller {

      public function index() {
         return view('/home', [ 'arr' => Articles::all()]);
      }

      public function viewArticles() {
         return view('/articles', ['arr' => Articles::all()]);
      }

      // single page article
      public function viewArticle(Articles $post) {
         return view('/article', [
            'arr' => $post
         ]);
      }

      public function viewAuthor(User $author) {
         return view('/articles', ['arr' => $author->articles]);
      }
   }