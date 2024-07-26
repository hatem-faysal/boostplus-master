<?php

namespace App\View\Components\Home;

use App\Models\CmsPage;
use Illuminate\View\Component;

class RecentWork extends Component
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
        $data = CmsPage::where('section','recent-works')->orderBy('sort','asc')->get();
        return view('components.home.recent-work',compact('data'));
    }
}
