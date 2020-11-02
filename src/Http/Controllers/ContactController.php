<?php

namespace Arkal\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Arkal\Contact\Mail\ContactMail;
use Arkal\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        Mail::to(config('contact.to'))->send(new ContactMail($request->message));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
