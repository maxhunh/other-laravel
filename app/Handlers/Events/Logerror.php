<?php

namespace App\Handlers\Events;

use App\Events\TweetHandleCreate;
use App\Events\TweetHandleUpdate;

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
    # MeNote: handle action create new tweet
    public function handle_create(TweetHandleCreate $event)
    {
      # code...
      error_log("App have created ok !");
      error_log("Event be created with id");
      error_log($event->get_id());
    }

    # MeNote: handle action update tweet
    public function handle_update(TweetHandleUpdate $event)
    {
      # code...
      error_log("App have update ok !");
      error_log("Event be update with id");
      error_log($event->get_id());
    }
}
