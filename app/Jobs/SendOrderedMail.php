<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\OrderedMail;
use Illuminate\Support\Facades\Mail;

class SendOrderedMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



    public $product;
    public $user;

    public function __construct($product, $user)
    {

        $this->product = $product;
        $this->user = $user;
    }


    public function handle()
    {
        Mail::to($this->product['email'])
            ->send(new OrderedMail($this->product, $this->user));
    }
}
