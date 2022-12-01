<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Jobs\SendEmailToAdmin;
use App\Jobs\SendEmailToUser;

use Mail;
use App\Mail\CommentCreateMailToAdmin;
use App\Mail\CommentCreateMailToUser;

class SendEmailNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        dispatch( new SendEmailToAdmin( $event->comment->toArray() ) );

        dispatch( new SendEmailToUser( 
            $event->comment->toArray(), 
            $event->email_of_author 
        ) );

    }
}
