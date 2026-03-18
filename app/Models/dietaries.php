<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dietaries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
