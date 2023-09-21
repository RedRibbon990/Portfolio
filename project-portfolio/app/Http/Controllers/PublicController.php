<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function about() {
        return view('about');
    }

    
    public function contact() {
        return view('contact');
    }

    public function send(Request $request) {

        $request->validate([
        'name' => 'required',
        'text' => 'required',
        'email' => 'required|email',
         'message' => 'required|min:10',
        ]);

        $data=[
            'name' => $request->name,
            'text' => $request->text,
            'email' => $request->email,
            //'email'=>$request->input('email') ---- altro modo di scriverlo
             'message' => $request->message,
        ];
    }
}
