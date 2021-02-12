<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:255'
        ]);

        Mail::raw(request('message'), function ($message) {
            $message->from(request('email'), request('name'))
                ->to('mycompany@example.com')
                ->subject('Hello there!');
        });

        return redirect('contact')->with('message', 'Email sent successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('contact');
    }
}
