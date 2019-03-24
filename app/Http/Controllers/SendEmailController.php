<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\OfficialMail;
use App\Mail\LetterMail;
use App\Mail\ComplaintMail;
use App\Mail\InquiryMail;
use App\Mail\AcknowledgementMail;

class SendEmailController extends Controller
{ //creating index method for load view file of the mail form //
    function index()
    {

        return view('send_email');
    }

    //submitting request for send email//
    public function send(Request $request)
    {

        if ($request->has('type') && $request->type == 'Official') {
            $data = array(
                'from_mail' => $request->from,
                'to_mail' => $request->to,
                'subject' => $request->subject,
                'name' => $request->name,
                'message' => $request->message,
                'address_line_1' => $request->address_line_1,
                'address_line_2' => $request->address_line_2,
                'address_line_3' => $request->address_line_3,
                'address_line_4' => $request->address_line_4,
                'contact_number' => $request->number,
                'logo' => $request->logo,

            );

            Mail::to('lakshiwalisingha6@gmail.com')->send(new OfficialMail($data));
            return back()->with('success', 'Thanks for contacting us!');
        }


        if ($request->has('type') && $request->type == 'Personal') {

            $data = array(
                'from_mail' => $request->from,
                'to_mail' => $request->to,
                'name' => $request->name,
                'message' => $request->message,
                'phone' => $request->number,

            );

            Mail::to('lakshiwalisingha6@gmail.com')->send(new SendMail($data));
            return back()->with('success', 'Thanks for contacting us!');

        }

        if ($request->has('type') && $request->type == 'Letters') {

            $data = array(
                'from_mail' => $request->from,
                'to_mail' => $request->to,
                'Greeting' => $request->Greeting,
                'subject' => $request->subject,
                'name' => $request->name,
                'message' => $request->message,
                'address_line_1' => $request->address_line_1,
                'address_line_2' => $request->address_line_2,
                'address_line_3' => $request->address_line_3,
                'address_line_4' => $request->address_line_4,
                'phone' => $request->number,
                'logo' => $request->logo,

            );

            Mail::to('lakshiwalisingha6@gmail.com')->send(new LetterMail($data));
            return back()->with('success', 'Thanks for contacting us!');

        }

        if ($request->has('type') && $request->type == 'Complaints') {

            $data = array(
                'from_mail' => $request->from,
                'to_mail' => $request->to,
                'subject' => $request->subject,
                'name' => $request->name,
                'index_number' => $request->index_number,
                'message' => $request->message,
                'phone' => $request->number,
                'logo' => $request->logo,

            );

            Mail::to('lakshiwalisingha6@gmail.com')->send(new ComplaintMail($data));
            return back()->with('success', 'Thanks for contacting us!');

        }

        if ($request->has('type') && $request->type == 'Inquiry') {

            $data = array(
                'from_mail' => $request->from,
                'to_mail' => $request->to,
                'subject' => $request->subject,
                'name' => $request->name,
                'index_number' => $request->index_number,
                'your_problem' => $request->your_problem,
                'phone' => $request->number,
                'logo' => $request->logo,

            );

            Mail::to('lakshiwalisingha6@gmail.com')->send(new InquiryMail($data));
            return back()->with('success', 'Thanks for contacting us!');

        }

        if ($request->has('type') && $request->type == 'Acknowledgement') {

            $data = array(
                'from_mail' => $request->from,
                'to_mail' => $request->to,
                'subject' => $request->subject,
                'name' => $request->name,
                'message' => $request->message,
                'phone' => $request->number,
                'logo' => $request->logo,

            );

            Mail::to('lakshiwalisingha6@gmail.com')->send(new AcknowledgementMail($data));
            return back()->with('success', 'Thanks for contacting us!');

        }

    }
}
