<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewContent extends Mailable
{
    use Queueable, SerializesModels;

    public $contentName,$contentEmail,$contentDescription;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contentName,$contentEmail,$contentDescription)
    {
        $this->contentName = $contentName;
        $this->contentEmail = $contentEmail;
        $this->contentDescription = $contentDescription;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('laravelapp@laravelapp.ir')->view('mails.content')->with([
            'contentName' => $this->contentName,
            'contentEmail' => $this->contentEmail,
            'contentDescription' => $this->contentDescription
        ]);
    }
}
