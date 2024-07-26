<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUSMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $AllData;
    public $typeOf;
    public function __construct($AllData)
    {
        $this->AllData = $AllData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->subject($this->AllData['message'])->from($this->AllData['email'],config('mail.from.name'))->markdown('mail.send-offer');
    }
}
