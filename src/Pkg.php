<?php

namespace fiberno\Pkg;

class Pkg
{
    public function __construct($token, $endPoint)
    {
        $this->token = $token;
        $this->endPoint = $endPoint;
    }

    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($to, $message, $test=false, $callback=null)
    {
        // return $this->client->send([
        //     'to' => $to,
        //     'message' => $message,
        //     'test' => $test,
        //     'callback' => null
        // ]);
    }

    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function fetch($page=1)
    {
        
    }
}