<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'occasion',
        'date',
        'time',
        'guests',
        'table_preference',
        'message',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // convenient helpers
    public function isPending()
    {
        return $this->status === 'pending';
    }
    public function isApproved()
    {
        return $this->status === 'approved';
    }
    public function isBooked()
    {
        return $this->status === 'booked';
    }
}
