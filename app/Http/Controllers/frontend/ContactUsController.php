<?php

namespace App\Http\Controllers\frontend;

use App\Actions\ContactUs\StoreContactUsAction;
use App\Events\MailEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUs\StoreContactUsRequest;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(StoreContactUsRequest $request){
        $AllData = app(StoreContactUsAction::class)->handle($request->validated());
        event(new MailEvent($AllData));
        return redirect()->back()->with('add','Success Add ContactUs');
    }
}
