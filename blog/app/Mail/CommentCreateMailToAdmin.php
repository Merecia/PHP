<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentCreateMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->view('emails.comment-added-for-admin');
    }
}
