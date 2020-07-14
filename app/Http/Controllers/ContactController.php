<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactController extends Controller
{
    public function store(Request $request)
    {

        $contact = new Contact();
        $contact->object = $request->input('Object');
        $contact->email = $request->input('Email');
        $contact->message = $request->input('Message');

        $contact->save();


         return redirect('/contact')->with('success', 'This message is sent to the admin');



        
    }
    
}
