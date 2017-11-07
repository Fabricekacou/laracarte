<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $mail;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email, $message)
    {
        $this->name = $name;
        $this->mail = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');
    }
}
