<?php

namespace App\Notifications;

use App\Models\Vehicle;
use App\Models\Applicant;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdminReservationConfirmation extends Notification
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
        // $applicant = Applicant::find($id);
        // $vehicle = Vehicle::find($id);
        return (new MailMessage)
            ->greeting('Congratulations!')
            ->subject('Kommute Reservation')
            ->from('info@kommute.africa', 'Kommute Financing Ltd')
            ->line('A new reservation has been made for ' . '' . 'by ' . '')
            ->line('Thank you for choosing Kommute');
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
