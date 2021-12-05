<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Insurance;
use Illuminate\Support\Facades\Mail;
use Validator;



class MailController extends Controller
{
    public function sendmail()
    {
        $data = [
            'title' => 'Mail from Insurance',
            'body' => 'This mail is for testing purpose using gmail'
        ];
        Mail::to("kishoregop@gmail.com")->send(new Insurance($data));
        return "Email sent";
    }
}
