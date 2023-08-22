<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactMailable;
use Illuminate\Support\Facades\Mail;


class contactUsController extends Controller
{
    public function index()
    {
        return view('Contact.contactUs');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'opinion' => 'required'
        ]);

    
        $correo = new contactMailable($request->all());
        Mail::to('smashedpurse@gmail.com')->send($correo);
        
        return redirect()->route('contactUs.index')->with('info','Message sended succesfully');
        
    }

}
