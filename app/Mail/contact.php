<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contact extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact,$fromemail)
    {
        $this->contact=$contact;
        $this->email=$fromemail;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->replyTo($this->email)->
        subject('mail from user in maktabty')
        ->view('Front_end.message');
    }
}
