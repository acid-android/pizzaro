<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserSubscribedEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.subscription', [
            'email' => $this->email
        ]);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }




}
