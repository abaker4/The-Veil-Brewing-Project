<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Taproom;
class TapNewsletter extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
       //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

       $taps = Taproom::all();
        return $this->markdown('emails.tapnewsletter', compact('taps'));

    }
}
