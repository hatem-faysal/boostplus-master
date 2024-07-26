<?php

namespace App\View\Components\frontend;

use App\Models\Setting;
use Illuminate\View\Component;

class Head extends Component
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
        $logoBlack = Setting::where('id',13)->first();
        $logoWhite = Setting::where('id',14)->first();

        return view('components.frontend.head',compact('logoWhite','logoBlack'));
    }
}
