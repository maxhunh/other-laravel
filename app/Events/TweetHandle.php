<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TweetHandle extends Event
{
    use SerializesModels;

    public $tweet_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($tweet_id)
    {
        //
        $this->tweet_id = $tweet_id;
    }


    public function get_id()
    {
        return $this->tweet_id;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
