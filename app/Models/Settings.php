<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'bio',
        'logo_dark',
        'brand_light',
        'fav_icon',
        'email',
        'phone',
        'address',
        'opening_hours',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
        'linkedin',
        'pinterest',
        'whats_app',
        'privacy_policy',
        'terms_conditions',
        'refund_policy',
    ];
}
