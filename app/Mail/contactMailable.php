<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class contactMailable extends Mailable
{
    use Queueable, SerializesModels;


    public $contact = "Esta es la información de contacto";

    
    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Registro de Producto',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(                    
            view: 'emails.contactUs'
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
