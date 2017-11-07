<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactResquest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactResquest $request)
    {
        $mailable = new ContactMessageCreated($request->name, $request->email, $request->message);

        Mail::to('adminlaracarte@gmail.com')->send($mailable);

        flashy('Nous vous repondrons dans les plus brefs délais!');
//        flashy('You have been logged out.');

       return redirect()->route('root_path');
    }


}
