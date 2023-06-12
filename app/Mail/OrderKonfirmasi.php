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
use Illuminate\Support\Facades\File;

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
        $gambarPath = public_path('images/' . $this->checkout->bukti_transfer);
        $lampiranNama = basename($this->checkout->bukti_transfer);

        $mime = File::mimeType($gambarPath);

        if($lampiranNama != null){
            return $this->subject('Ada Pesanan Baru')
                        ->view('emails.order-notifikasi')
                        ->attach($gambarPath, [
                            'as' => $lampiranNama,
                            'mime' => $mime,
                        ]);
        }
        else{
            return $this->subject('Ada Pesanan Baru')
                        ->view('emails.order-notifikasi');
        }

    }
    
}
