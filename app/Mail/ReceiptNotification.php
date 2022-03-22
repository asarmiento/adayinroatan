<?php

namespace App\Mail;

use App\Models\Reservation;
use App\Models\Sysconf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReceiptNotification extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Reservation
     */
    public $reservation;
    /**
     * @var Sysconf
     */
    public $sysconf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation)
    {
        //
        $this->reservation=$reservation;
        $this->sysconf=Sysconf::all();;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS',env('APP_NAME')))->view('notifications.receipt')
            ->with(['reservation'=>$this->reservation,
        'sysconf'=>$this->sysconf]);
    }
}
