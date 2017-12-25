<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MyResetPasswordNotification extends ResetPassword
{

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Você está recebendo essa mensagem porque uma requisição de redefinição foi enviada.')
                    ->action('Redefinir senha',  url(config('app.url').route('password.reset', $this->token, false)))
                    ->line('Obrigado por usar nossa aplicação!');

    }



}
