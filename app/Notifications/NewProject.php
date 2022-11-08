<?php

namespace App\Notifications;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Laravel\Nova\Notifications\NovaChannel;
use Laravel\Nova\Notifications\NovaNotification;

class NewProject extends NovaNotification
{

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(protected Project $project)
    {
        //
    }

    public function toNova()
    {
        return [
            'message' => sprintf('The project #%s was created', $this->project->id),
        ];
    }


}
