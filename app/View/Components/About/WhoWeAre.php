<?php

namespace App\View\Components\About;

use App\Models\CmsPage;
use Illuminate\View\Component;

class WhoWeAre extends Component
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
        $data = CmsPage::where('status','Active')->where('section','WhoWeAre')->orderBy('sort','asc')->get();
        return view('components.about.who-we-are',compact('data'));
    }
}
