<?php

namespace App\View\Components\home;

use App\Models\Blogs;
use App\Models\CmsPage;
use Illuminate\View\Component;

class Blog extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = Blogs::where('status','Active')->orderBy('sort','asc')->get();
        $cmsPage = CmsPage::where('status','Active')->where('section','blog')->orderBy('sort','asc')->first();
        return view('components.home.blog',compact('data','cmsPage'));
    }
}
