<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function submitFeedback(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    try {
        // Process the form data (e.g., send an email)
        Mail::to('edrisashman@gmail.com')->send(new \App\Mail\FeedbackMail($validatedData));

        // Redirect the user to a success page with a success message
        return redirect('/')->with('success', 'Your message has been sent. Thank you!');
    } catch (\Exception $e) {
        // Handle the exception (e.g., log the error, display an error message to the user)
        return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
    }
}

}
