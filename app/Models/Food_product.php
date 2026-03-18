<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'dietary_id',
        'title',
        'slug',
        'food_image',
        'chef_title',
        'chef_notes',
        'description',
        'ingredients',
        'nutrition',
        'discount_percent',
        'discount_price',
        'price',
    ];

  

    public function Reviews()
    {
        return $this->hasMany(FoodReview::class, 'food_id');
    }

    public function category()
    {
        return $this->belongsTo(categories::class);
    }

    public function dietary()
    {
        return $this->belongsto(dietaries::class);
    }
}
