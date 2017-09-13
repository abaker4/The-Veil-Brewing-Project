<?php

namespace App\Mail;


use App\Contacts;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;


    public $contacts;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contacts $contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('info@theveilbrewing.com')
            ->view('emails.welcome');
    }
}
