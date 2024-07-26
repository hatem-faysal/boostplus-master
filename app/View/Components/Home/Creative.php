<?php

namespace App\View\Components\Home;

use App\Models\CmsPage;
use Illuminate\View\Component;

class Creative extends Component
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
        $data = CmsPage::where('status','Active')->where('section','creative')->orderBy('sort','asc')->first();
        return view('components.home.creative',compact('data'));
    }
}
