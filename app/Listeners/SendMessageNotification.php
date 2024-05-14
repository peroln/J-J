<?php

namespace App\Listeners;

use App\Events\RequestCallSaved;
use App\Mail\AdminMail;
use App\Models\RequestCall;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMessageNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(RequestCallSaved $event): void
    {

        Mail::to(config('to.address'))->send(new AdminMail($event->requestCall));
    }
}
