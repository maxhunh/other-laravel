<?php

namespace App\Handlers\Events;

use App\Events\TweetHandle;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Logerror
{
    /**
     * Create the event handler.
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
     * @param  TweetHandle  $event
     * @return void
     */
    public function handle(TweetHandle $event)
    {
      # code...
      error_log("Event be created with id");
      error_log($event->get_id());
    }
}
