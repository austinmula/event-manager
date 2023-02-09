<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        "name", "start_date", "lead_date", "banner", "status", "owner_id", "frequency", "category_id"
    ];
    public function events()
    {
        return $this->hasMany(Event::class, 'event_id', 'id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function category(){
        return $this->belongsTo(EventCategory::class, 'category_id');
    }

}
