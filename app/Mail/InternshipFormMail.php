<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InternshipFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->data['fname'], // Set the subject to the first name of the user
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.email_internship',
            with: ['data' => $this->data],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        // Check if the resume file is present
        if (isset($this->data['resume']) && $this->data['resume']) {
            return [
                \Illuminate\Mail\Mailables\Attachment::fromStorageDisk('local', $this->data['resume']->getRealPath())
                    ->as($this->data['resume']->getClientOriginalName()) // File name
                    ->withMime($this->data['resume']->getMimeType()) // MIME type
            ];
        }

        return [];
    }
}
