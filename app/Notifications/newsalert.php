<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessag;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Carbon\Carbon;

class newsalert extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $news;
    public function __construct($news)
    {
            $this->news=$news;

        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        //dd($notifiable);
        return [
            'news'=>$this->news,
            'user'=>$notifiable


        ];
    }

    public function toArray($notifiable)
    {
        return [
            
            //
        ];
    }
}
