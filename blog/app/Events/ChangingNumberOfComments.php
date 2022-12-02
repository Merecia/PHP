<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChangingNumberOfComments implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $commentsCounter;

    public function __construct($commentsCounter)
    {
        $this->commentsCounter = $commentsCounter; 
    }
    
    public function broadcastOn()
    {
        return new Channel('broadcast-channel');
    }
}
