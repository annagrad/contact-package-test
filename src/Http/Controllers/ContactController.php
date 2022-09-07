<?php

namespace Annagrad\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Annagrad\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;

use Annagrad\Contact\Mail\ContactMail;

class ContactController extends Controller
{
    public function get_contact()
    {
        return view('contact::contact');
    }

    public function post_contact(Request $request) 
    {
        $contact = Contact::create($request->except('_token'));
        Mail::to(config('contact.send_email_to'))->send(new ContactMail($contact->name, $contact->message));
        return 'message sent';
    }
}


