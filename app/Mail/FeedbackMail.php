<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    public $feedbackData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $feedbackData)
    {
        $this->feedbackData = $feedbackData;
    }

/**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Feedback Received')
                    ->view('emails.feedback')
                    ->with('feedbackData', $this->feedbackData);
    }
}
