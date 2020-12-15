<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewContent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $contentName,$contentEmail,$contentDescription;
    /**
     * Create a new event instance.
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
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
