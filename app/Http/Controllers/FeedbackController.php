<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request,[
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_subject' => 'required',
            'customer_feedback' => 'required',
        ]);

        $feedback = new Feedback();
        $feedback->customer_name = $request->customer_name;
        $feedback->customer_email = $request->customer_email;
        $feedback->customer_subject = $request->customer_subject;
        $feedback->customer_feedback = $request->customer_feedback;

        $feedback->save();

            return redirect("/feedback/successful")->with('success','Feedback Added Successfully');
    }
    public function success()
    {
        // $feedbacks = Feedback::all();

        return view('user.feedback.feedback');
    }
}
