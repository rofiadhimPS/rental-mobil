<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderKonfirmasi;
use App\Models\Checkout;

class KirimCepat implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $checkout;

    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $checkout = $this->checkout;

        $ownerEmail = 'dermawanwahyu001@gmail.com';
        Mail::to($ownerEmail)->send(new OrderKonfirmasi($checkout));
    }
}
