<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use App\Mail\AvisoMailable;
use Illuminate\Support\Facades\Mail;
use Session;

class SendEmailController extends Controller
{
    public function viewForm()
    {
        return view('welcome');
    }
    public function sendEmail(SendEmailRequest $request)
    {
        //* Generamos un session flash para la alerta
        Session::flash('alert', ' ');

        $imgs=[];                        
        foreach ($request->file('images') as $imagen) {
            $nombre = uniqid() . '.' . $imagen->getClientOriginalExtension();
            $imgs[] = $imagen->storeAs('public/imagenes', $nombre);
        }

        $correo = new AvisoMailable(
            $request->name,
            $request->identifier,
            $request->area,
            $request->subject,
            $request->issue,
            $imgs
        );

        Mail::to('al222111269@gmail.com')->send( $correo );

        return view('welcome');
    }
}
