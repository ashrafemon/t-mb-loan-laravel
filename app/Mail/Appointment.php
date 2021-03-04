<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Appointment extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $senderID;
    protected $mailSubject;
    protected $mailBody;

    public function __construct($_senderID, $_mailSubject, $_mailBody)
    {
        $this->senderID = $_senderID;
        $this->mailSubject = $_mailSubject;
        $this->mailBody = $_mailBody;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->senderID)->subject($this->mailSubject)->view('emails.appointment')->with([
            'subject' => $this->mailSubject,
            'body' => $this->mailBody,
        ]);
    }
}
