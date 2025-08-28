<?php

namespace App\Mail\Frontend;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminSubmitApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invitation;
    public $DBjob;

    /**
     * Create a new message instance.
     */
    public function __construct($invitation, $DBjob)
    {
        $this->invitation = $invitation;
        $this->DBjob = $DBjob;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Admin Submit Application Mail',
        );
    }
    
    public function build()
    {
        return $this->subject("Your Application Submission Confirmation")
                    ->view('emails.frontend.admin-submit-application')
                    ->with([
                        'invitation' => $this->invitation,
                        'DBjob' => $this->DBjob,
                    ]);
    }
}
