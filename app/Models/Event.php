<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'from_date',
        'to_date',
        'name_location',
        'link_location',
        'description',
        'coupon_code',
        'status',
        'type',
        'mode',
        'user_id'
    ];

    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
    ];

    public function event()
    {
        $this->belongsTo(User::class);
    }
}
