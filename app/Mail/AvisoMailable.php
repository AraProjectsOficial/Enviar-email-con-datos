<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AvisoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $identifier, $area, $subject, $issue, $imgs;

    public function __construct($contenido, $imgs)
    {
        $this->name = $contenido->name;
        $this->identifier = $contenido->identifier;
        $this->area = $contenido->area;
        $this->subject = $contenido->subject;
        $this->issue = $contenido->issue;
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
