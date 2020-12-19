<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\HostelBooking;

class hostelbookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $mobile;
    public $email;
    public $id;

    public function __construct($name, $mobile, $email, $id)
    {
        $this->name = $name;
        $this->mobile = $mobile;
        $this->email = $email; 
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hostelconnect177@gmail.com')
        ->subject('New Hostel Booking Notification')->markdown('emails.hostelbookingnotification')
        ->with(['url'=>"https://hostelconnect.in/room-details/".$this->id]);
    }
}
