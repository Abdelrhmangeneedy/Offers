<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = [
        'cate_id',
        'shop_id',
        'name',
        'slug',
        'phone',
        'phone2',
        'original_price',
        'offer_price',
        'period',
        'image',
        'description',
        'status',
        'trending',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }
}
