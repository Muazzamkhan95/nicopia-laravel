<?php

namespace App\Http\Mail;

use Illuminate\Mail\Mailable;

class SendEmail extends Mailable
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $emailData = $this->data;
        return $this->subject('New Email from Nicopia Form')
            ->view('frontend.email')->with('emailData', $emailData); // Create a Blade view for your email content
    }
}
