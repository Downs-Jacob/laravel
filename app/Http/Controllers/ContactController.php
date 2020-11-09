<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function show(){
        return view('contact');

    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        //send email
        Mail::to(request('email'))
            ->send(new Contact());


        return redirect('/contact')
            ->with('message', 'Email Sent');
    }
}
