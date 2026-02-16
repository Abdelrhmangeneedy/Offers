<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'image',
        'status',
        'trending',
        'description',
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class, 'cate_id', 'id');
    }
    public function offers()
    {
        return $this->hasMany(Offer::class, 'cate_id', 'id');
    }

}
