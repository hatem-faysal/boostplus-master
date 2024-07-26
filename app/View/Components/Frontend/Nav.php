<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;
use App\Models\Page;
use App\Models\Setting;

class Nav extends Component
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
        $pages = Page::whereNull('parent_id')->where([
            ['status','Active'],
            ['nave','Active'],
        ])->with('childes')->get();

        $model = Setting::where('key','LogoWhite')->first();

        return view('components.frontend.nav',compact('pages','model'));
    }
}
