<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        "name", "start_date", "lead_date", "banner", "status", "owner_id", "frequency"
    ];


}
