<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
      public function index($slug = null,$subSlug=null){
            if($slug=='home'){
                  return view('frontend.page.home');
            }
            if($slug==''){
                  return view('frontend.page.home');
            }
            if($slug=='portfolio'){
                  return view('frontend.page.portfolio');
            }
            if($slug=='about'){
                  return view('frontend.page.about');
            }
            if($slug=='contact'){
                  return view('frontend.page.contact');
            }
      }
}
