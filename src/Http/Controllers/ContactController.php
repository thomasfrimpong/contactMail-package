<?php

namespace Thomas2022\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Thomas2022\Contact\Mail\ContactMailable;
use Thomas2022\Contact\Model\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config("contact.send_mail_to"))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect('/');
    }
}
