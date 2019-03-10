<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\OfficialMail;

class SendEmailController extends Controller
{
    function index()
    {

    	return view('send_email');
    }

    function send(Request $request)
   {
       // $this->validate($request,[
       //   'name'     =>  'required',
       //   'email'  =>  'required|email',
       //   'message' =>  'required'
       //   ]);  


    		if($request->has('type') && $request->type == 'Official')
    		{
     $data = array(
            'from_mail'      =>  $request->from,
            'to_mail'      =>  $request->to,
              'subject'   =>   $request->name,
            'name'   =>   $request->name,
            'message'   =>   $request->message,
            'address_line_1'   =>   $request->address_line_1,
            'address_line_2'   =>   $request->address_line_2,
            'address_line_3'   =>   $request->address_line_3,
            'address_line_4'   =>   $request->address_line_4,
            'contact_number'   =>   $request->number,
            
        );

     Mail::to('lakshiwalisingha6@gmail.com')->send(new OfficialMail($data));
     return back()->with('success', 'Thanks for contacting us!');    		}

    		  

      if($request->has('type') && $request->type == 'Personal')
   		{

         $data = array(
            'from_mail'      =>  $request->from,
            'to_mail'      =>  $request->to,
            'message'   =>   $request->message,
            'description'   =>   $request->message,
            'phone'   =>   $request->message,
            'type'   =>   $request->message,
        );

     Mail::to('lakshiwalisingha6@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

       		}

		
   }
}
