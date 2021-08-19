<?php

namespace App\Listeners;

use App\Events\ApprovalRequest;
use App\Jobs\CreateRequest;
use App\Models\User;
use App\Notifications\ApprovalNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class ApprovalListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ApprovalRequest $event
     * @return void
     */
    public function handle(ApprovalRequest $event)
    {
        CreateRequest::dispatch($event->param);
        
        // if(Auth::check()){
        //     $user = User::find(Auth::user()->id);
            
        //     $user->notify(new ApprovalNotification());
        // }
    }
}
