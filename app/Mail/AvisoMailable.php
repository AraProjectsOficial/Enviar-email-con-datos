<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AvisoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $identifier, $area, $subject, $issue, $imgs;

    public function __construct($name, $identifier, $area, $subject, $issue, $imgs)
    {
        $this->name = $name;
        $this->identifier = $identifier;
        $this->area = $area;
        $this->subject = $subject;
        $this->issue = $issue;
        $this->imgs = $imgs;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->issue,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.aviso',
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
