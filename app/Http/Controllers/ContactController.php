<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }


    public function store(ContactRequest $request)
    {
        $params = [
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'sujet' => $request->get('subject'),
            'about' => $request->get('message'),

            "subject" => "Naele.com"
        ];

        DB::table('contact')->insert([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ]);


        Mail::to(Config::get('contact.email'))->send(new ContactMe($params));
        return redirect('/contact')
            ->with('status','Votre demande à été envoyé avec succés 🤗!');
        /*
        $email = request ('email');
        dd($email);
        */
    }
}
