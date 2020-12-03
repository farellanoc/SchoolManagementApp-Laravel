<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewExam
{
    use SerializesModels;

    public $exam;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($exam)
    {
        $this->exam = $exam;
    }
}
