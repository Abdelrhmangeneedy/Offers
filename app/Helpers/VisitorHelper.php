<?php
// app/Helpers/VisitorHelper.php
namespace App\Helpers;

use Illuminate\Support\Facades\Cache;

class VisitorHelper
{
    public static function countVisitor()
    {
        $ip = request()->ip();
        $key = 'visitor_' . $ip;
        if (!Cache::has($key)) {
            Cache::put($key, true, now()->addHours(6)); // 6 ساعات
            Cache::increment('unique_visitors');
        }
    }

    public static function getCount()
    {
        return Cache::get('unique_visitors', 0);
    }
}
