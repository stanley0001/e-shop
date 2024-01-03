<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendCustomEmail(int $request)
    {
        // $title = $request->title;
        // $id = $request->id;
        $id = $request;

        // $mail_result=Mail::to("bernardmuiruri207@gmail.com")->send(new OrderMail($id));
        $mail_result=Mail::to("jowatex04@gmail.com")->send(new OrderMail($id));
        
        // return "Email sent successfully!";
        return $mail_result;
    }
}
