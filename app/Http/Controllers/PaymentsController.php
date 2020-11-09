<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Notifications\PaymentRecieved;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create(){
        return view('payments');

    }

    public function store(){
        Notification::send(request()->user(), new PaymentRecieved(900));

    }

}
