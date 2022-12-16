<?php

   namespace App\Http\Controllers;

   // models
   
   class AdminController extends Controller {

      public function viewLogin () {
         return view('admin/login');
      }
      
      public function viewRegister () {
         return view('admin/register');
      }

      public function viewIndex () {
         return view('admin/home');
      }

      public function  viewMyProfile($id) {
         return view('admin/my-profile');
      }

      public function  viewPostArticle() {
         return view('admin/post-article');
      }

      public function  viewMyPosts() {
         $arr = [1,2,3];

         return view('admin/view-articles', ['array' => $arr]);
      }

      public function  viewMySinglePost($articleId) {

         return view('admin/view-single-article');
      }
   }