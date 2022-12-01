<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AddingNewComment
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $comment;
    public $email_of_author;
    
    public function __construct($comment, $email_of_author)
    {
        $this->comment = $comment;
        $this->email_of_author = $email_of_author;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
