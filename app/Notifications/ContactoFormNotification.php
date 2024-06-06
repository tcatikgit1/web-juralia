<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactoFormNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        $informacionContacto = $notifiable->datos;
        $emailContacto = $informacionContacto->email;
        $mail = new MailMessage;
        $mail= $mail->cc($emailContacto)
                    ->greeting('Hola,')
                    ->subject('Juralia - Contacto Web')
                    ->line('El siguiente contacto a escrito un mensaje a través del formulario de la web con la siguiente información')
                    ->line('Nombre: '.$informacionContacto->nombre)
                    ->line('Teléfono: '.$informacionContacto->telefono)
                    ->line('Correo electrónico: '.$informacionContacto->email);

        if($informacionContacto->consulta != "") {
            $mail= $mail->line('Mensaje del contacto: '.$informacionContacto->consulta);
        }

        return $mail;
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
