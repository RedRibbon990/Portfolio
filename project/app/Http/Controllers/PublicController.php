<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail()
    {
        return view('detail');
    }
    
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('service');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);
        
        $data=[
            'name' => $request->name,
            'text' => $request->text,
            'email' => $request->email,
            'message' => $request->message,
            'data' => now()
        ];

        Mail::to($data['email'])->send(new InfoMail($data));
    }
}
