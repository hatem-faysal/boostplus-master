<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\CmsPage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog($slug=null){
        $cmsPageBlogs = CmsPage::where('status','Active')->where('section','blog')->orderBy('sort','asc')->first();
        $data = Blogs::where('status','Active')->orderBy('sort','asc')->get();
        $DataLatest = Blogs::where('status','Active')->orderBy('sort','asc')->latest()->limit(4)->get();
        if(!empty($slug)){
            $Blogs = Blogs::where('status','Active')->where('slug->en',$slug)->orderBy('sort','asc')->first();
            return view('frontend.page.blog-single',compact('Blogs','data','DataLatest'));
        }
        return view('frontend.page.blog',compact('data','DataLatest','cmsPageBlogs'));
    }
}
