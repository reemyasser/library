<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class forgetpass extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;
    public $fromemail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact,$fromemail)
    {
        //
        $this->contact = $contact;
        $this->fromemail=$fromemail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->fromemail)->subject('Forget password')->view('Front_end.message');
    }
}
