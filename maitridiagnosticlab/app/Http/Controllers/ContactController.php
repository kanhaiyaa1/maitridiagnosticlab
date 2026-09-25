<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            Log::info('Contact form submitted', [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);

            $recipientEmail = "aks23bali@gmail.com";

            Mail::to($recipientEmail)->send(new ContactFormMail($request->all()));

            Log::info('Email sent successfully to ' . $recipientEmail);

            return redirect()->back()->with([
                'message' => 'Success',
                'message_type' => 'success'
            ]);

        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage(), [
                'exception' => $e,
                'request_data' => $request->except('password')
            ]);

            return redirect()->back()->with([
                'message' => 'Error sending email. Please try again.',
                'message_type' => 'error'
            ]);
        }
    }
}
