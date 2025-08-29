<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'institution',
        'event_id',
        'status',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
