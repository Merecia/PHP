<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\Mail\CommentCreateMailToUser;

class SendEmailToUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public $email;

    public function __construct($data, $email)
    {
        $this->data = $data;
        $this->email = $email;
    }
    
    public function handle()
    {
        Mail::to($this->email)->send(
            new CommentCreateMailToUser($this->data)
        );
    }
}
