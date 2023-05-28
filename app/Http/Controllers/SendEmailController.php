<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function viewForm()
    {
        return view('welcome');
    }
    public function sendEmail(SendEmailRequest $request)
    {
        dump($request);
    }
}
