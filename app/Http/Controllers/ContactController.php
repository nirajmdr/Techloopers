<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Message;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
      $message = new Message();
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->subject = $request->input('subject');
      $message->message = $request->input('message');
      $message->save();

      return redirect()->route('index')->with('Success', 'Thank You for your Message!!');
    }

    public function clientMessages() {
      $message = Message::all();
      return view('pages.clientmessages', ['messages'=>$message]);

    }
}
