<?php

namespace App\Listeners;

use Alphaolomi\Azampay\Events\AzampayCallback;
use Illuminate\Support\Facades\Log;

class AzampayCallbackListener
{
    /**
     * Handle the event.
     */
    public function handle(AzampayCallback $event): void
    {
        Log::info('AzampayCallbackListener', $event->data);
    }
}
