<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use  App\Models\Yorumcu;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $yorumcu;
    public function __construct(Yorumcu $yorumcu)
    {
        $this->yorumcu=$yorumcu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
    }
}
