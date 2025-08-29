<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'from_date',
        'to_date',
        'start_time',
        'end_time',
        'name_location',
        'link_location',
        'description',
        'coupon_code',
        'status',
        'type',
        'mode',
        'user_id',
        'image_path'
    ];

    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
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

    public function getImageUrl()
    {
        if ($this->image_path) {
            return asset('storage/' . $this->image_path);
        }
        return null;
    }

    public function getFormattedTimeRange()
    {
        if ($this->start_time && $this->end_time) {
            $start = Carbon::parse($this->start_time)->format('H:i');
            $end = Carbon::parse($this->end_time)->format('H:i');
            return "{$start} - {$end} WIB";
        } elseif ($this->start_time) {
            return Carbon::parse($this->start_time)->format('H:i') . ' WIB';
        }
        return 'Waktu belum ditentukan';
    }

    public function getEventUrl()
    {
        return route('homepage.detail', $this->id);
    }

    public function getStatusText()
    {
        if ($this->status === 'inactive') {
            return 'Tidak Aktif';
        } elseif ($this->isUpcoming()) {
            return 'Akan Datang';
        } elseif ($this->isOngoing()) {
            return 'Sedang Berlangsung';
        } elseif ($this->isCompleted()) {
            return 'Selesai';
        } else {
            return 'Unknown';
        }
    }
}
