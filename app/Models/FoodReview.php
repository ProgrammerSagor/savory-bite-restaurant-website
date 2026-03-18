<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id',
        'user_id',
        'rating',
        'review',
    ];


    public function food()
    {
        return $this->belongsTo(Food_product::class, 'food_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
