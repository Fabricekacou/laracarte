<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactResquest;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactResquest $request)
    {

    }
}
