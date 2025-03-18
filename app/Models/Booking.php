<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_type',
        'booking_date',
        'start_time',
        'duration',
        'status',
        'amount',
        'payment_status',
        'payment_id',
        'notes'
    ];

    protected $casts = [
        'booking_date' => 'date',
        'start_time' => 'datetime',
        'amount' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
} 