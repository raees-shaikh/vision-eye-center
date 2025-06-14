<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     * 
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
    // function __construct()
    // {
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('emails.contact', ['data' => $this->data]);
        return $this->replyTo($this->data->email, $this->data->name)->markdown('emails.contact', ['data' => $this->data]);
    }
}
