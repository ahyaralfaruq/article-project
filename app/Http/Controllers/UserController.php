<?php

   namespace App\Http\Controllers;

   class UserController extends Controller {

      public function index() {
         return view('/home', [ 'arr' => ['a','b','c']]);
      }

      public function viewArticles() {
         return view('/articles');
      }

      // single page article
      public function viewArticle($slug) {
         return view('/article');
      }
   }