<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Success extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $toPatient = null;
    public $toAdmin = null;
    public function __construct($toPatient,$toAdmin)
    {
        $this->toPatient = $toPatient;
        $this->toAdmin = $toAdmin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $toPatient=$this->toPatient;
        $toAdmin=$this->toAdmin;
        return $this->subject(' Tele-consultation Appointment')->markdown('emails.success',compact('toPatient','toAdmin'));
        // return $this->subject(' Tele-consultation Appointment')->markdown('emails.success',compact('data'));
    }
}
