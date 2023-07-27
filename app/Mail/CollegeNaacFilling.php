<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CollegeNaacFilling extends Mailable
{
    use Queueable, SerializesModels;
    public $url;
    public $otp; //optional

    /**
     * Create a new message instance.
     */
    public function __construct($url,$otp=null)
    {
        $this->url=$url;
        $this->otp=$otp;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'College Naac Filling',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.college_naac_filling_credential',
            with:[
                'url'=>$this->url,
                'otp'=>$this->otp
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
