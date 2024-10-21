<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserOrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    // Deklarasi properti order
    public $order;

    /**
     * Create a new message instance.
     */
    public function __construct(Order $order)
    {
        // Inisialisasi properti order
        $this->order = $order;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('PANDANAN CONFIRMATION')
                    ->markdown('emails.user.orders.confirmation');
    }
}
