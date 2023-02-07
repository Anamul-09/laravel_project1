<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\demoMail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    // public function index()
    // {
    //     $mailData = [
    //         'name' => $request->name,
    //         'email' => $request->name,
    //     ];

    //     Mail::to('sajedul2016@gmail.com')->send(new DemoMail($mailData ));

    //     dd("Email is sent successfully.");

    //     // echo 'hello';
    // }

    public function Contact()
    {
        return view('contact');
    }

    public function MessageSend(Request $request)
    {
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        // print_r($datas);


        Mail::to('sajedul2016@gmail.com')->send(new DemoMail($mailData));

        dd('Email is sent Successfully');
    }
}
