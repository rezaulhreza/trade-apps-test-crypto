<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function send(ContactFormRequest $request)
    {
        $data= $request->validated();
        Mail::to('admin@tradeapps.com')->send(new ContactEmail($data));

        return response()->json('Email sent successfully',200);
        
        
    }


    
}
