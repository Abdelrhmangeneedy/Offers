<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactClick extends Model
{
    protected $table = 'contact_clicks';
    protected $fillable = ['clicks'];
    public $timestamps = true;

    public static function incrementClick()
    {
        $row = self::first();
        if (!$row) {
            $row = self::create(['clicks' => 0]);
        }
        $row->increment('clicks');
        return $row->clicks;
    }

    public static function getCount()
    {
        return optional(self::first())->clicks ?? 0;
    }
}
