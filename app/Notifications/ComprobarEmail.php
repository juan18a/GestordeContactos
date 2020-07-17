<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;



use App\User;

class ComprobarEmail extends Notification
{
    use Queueable;
    public $fromUser;
    public $id;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user, $id)
    {
        $this->fromUser = $user;
        $this->id = $id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $subject = sprintf('%s: Activa tu cuenta', config('app.name'));
        $greeting = sprintf('Activa tu cuenta %s!', $this->fromUser);
 
        return (new MailMessage)
                    ->subject($subject)
                    ->greeting($greeting)
                    ->salutation('Atentamente, el equipo de Gestión de Contactos')
                    ->line('Por favor verifica tu correo dando click en el enlace:')
                    ->action('Confirma tu email', url('/verificardatos', $this->id))
                    ->line('!Gracias por usar nuestra aplicación!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
