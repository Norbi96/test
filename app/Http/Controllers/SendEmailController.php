<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
class SendEmailController extends Controller
{
    function index()
    {
     return view('contact.index');
    }


    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required',
      'captcha' => 'required|captcha'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'email'   =>   $request->email
        );

     Mail::to('norbert.pavelka@gyapinet.hu')->send(new SendMail($data));
     return redirect()->back()->with('message', 'Köszönjük az üzenetet! Hamarosan jelentkezni fogunk!');

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
