<?php

namespace App\Observers;

use App\Event;
use Carbon\Carbon;

class EventObserver
{
    /**
     * Handle the event "created" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function created(Event $event)
    {
        if(!$event->event()->exists())
        {
            $frequencies = [
                'daily'     => [
                    'times'     => 365,
                    'function'  => 'addDay'
                ],
                'weekly'    => [
                    'times'     => 52,
                    'function'  => 'addWeek'
                ],
                'monthly'    => [
                    'times'     => 12,
                    'function'  => 'addMonth'
                ]
            ];

            $startTime = Carbon::parse($event->start_time);
            $leadTime = Carbon::parse($event->lead_time);
            $frequency = $frequencies[$event->frequency] ?? null;

            if($frequency)
                for($i = 0; $i < $frequency['times']; $i++)
                {
                    $startTime->{$frequency['function']}();
                    $leadTime->{$frequency['function']}();
                    $event->events()->create([
                        'name' => $event->name,
                        'banner' => $event->banner,
                        'start_time' => $startTime,
                        'lead_time'  => $leadTime,
                        'frequency'  => $event->frequency,
                        'owner_id' => $event->owner_id,
                        'category_id'=>$event->category_id,
                        'status'=> $event->status,
                    ]);
                }
        }
    }

    /**
     * Handle the event "updated" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function updated(Event $event)
    {
        //
    }

    /**
     * Handle the event "deleted" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function deleted(Event $event)
    {
        //
    }

    /**
     * Handle the event "restored" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function restored(Event $event)
    {
        //
    }

    /**
     * Handle the event "force deleted" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function forceDeleted(Event $event)
    {
        //
    }
}
