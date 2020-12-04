<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewWork
{
    use SerializesModels;

    public $work;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($work)
    {
        $this->work = $work;
    }
}
