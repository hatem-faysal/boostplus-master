<?php

namespace App\View\Components\Contact;

use App\Models\CmsPage;
use Illuminate\View\Component;

class ContactUs extends Component
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
        $data = CmsPage::where('status','Active')->where('section','ContactUs')->orderBy('sort','asc')->get();
        return view('components.contact.contact-us',compact('data'));
    }
}
