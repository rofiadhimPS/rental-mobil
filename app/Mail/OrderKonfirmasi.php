<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Checkout;

class OrderKonfirmasi extends Mailable
{
    use Queueable, SerializesModels;

    public $checkout;
    
    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
        

    }

    public function build()
    {
        return $this->subject('Notifikasi Pesanan Baru')
                    ->view('emails.order-notifikasi');
    }
    
}
