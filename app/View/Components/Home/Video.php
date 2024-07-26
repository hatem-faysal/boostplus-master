<?php

namespace App\View\Components\Home;

use App\Models\CmsPage;
use Illuminate\View\Component;

class Video extends Component
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
        $data = CmsPage::where('status','Active')->where('section','video')->orderBy('sort','asc')->first();
        return view('components.home.video',compact('data'));
    }
}
