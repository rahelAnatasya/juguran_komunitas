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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isUpcoming()
    {
        return $this->from_date > now();
    }

    public function isOngoing()
    {
        $now = now();
        return $this->from_date <= $now &&
               ($this->to_date === null || $this->to_date >= $now);
    }

    public function isCompleted()
    {
        return $this->to_date !== null && $this->to_date < now();
    }

    public function getStatusBadge()
    {
        if ($this->status === 'inactive') {
            return '<span class="badge bg-danger">Tidak Aktif</span>';
        } elseif ($this->isUpcoming()) {
            return '<span class="badge bg-warning">Akan Datang</span>';
        } elseif ($this->isOngoing()) {
            return '<span class="badge bg-success">Sedang Berlangsung</span>';
        } elseif ($this->isCompleted()) {
            return '<span class="badge bg-secondary">Selesai</span>';
        } else {
            return '<span class="badge bg-info">Unknown</span>';
        }
    }

    public function getFormattedDateRange()
    {
        $fromDate = $this->from_date->format('d M Y');
        
        if ($this->to_date) {
            $toDate = $this->to_date->format('d M Y');
            return "{$fromDate} - {$toDate}";
        }
        
        return $fromDate;
    }
}
