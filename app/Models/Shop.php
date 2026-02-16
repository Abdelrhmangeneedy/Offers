<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';
    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'description',
        'image',
        'status',
        'trending',
    ]; 

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
    public function offers()
    {
        return $this->hasMany(Offer::class, 'shop_id', 'id');
    }
}
