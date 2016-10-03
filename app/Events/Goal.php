<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Goal
{
    use InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
	public $team = "WPG";

	public function __construct()
    {
        //

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */

	public function broadcastOn()
	{
		return new Channel('goals');
	}
}