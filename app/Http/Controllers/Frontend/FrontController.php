<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\VisitorHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Shop;
use App\Models\ContactClick;

class FrontController extends Controller
{
    public function index()
    {
        VisitorHelper::countVisitor();
        $categories = Category::all();
        return view('frontend.index', compact('categories'));
    }
        public function viewcategory($name)
        {
            if (Category::where('name', $name)->exists()) {
                $category = Category::where('name', $name)->first();
                $shops = Shop::where('cate_id', $category->id)->where('status', '0')->get();
                $offers = Offer::where('cate_id', $category->id)->where('status', '0')->get();
                return view('frontend.category', compact('category', 'shops', 'offers'));
            } else {
                return redirect('/')->with('status', 'This Category Dosen`t exists');
            }
        }
    public function shops()
    {
        $shops = Shop::where('status', '0')->get();
        return view('frontend.shop', compact('shops'));
    }
    public function viewshop($name)
    {
        if (Shop::where('name', $name)->exists()) {
            $shop = Shop::where('name', $name)->first();
            $offers = Offer::where('shop_id', $shop->id)->where('status', '0')->get();
            return view('frontend.viewshop', compact('shop', 'offers'));
        } else {
            return redirect('/')->with('status', 'This Shop Dosen`t exists');
        }
    }
    public function offers()
    {
        $offers = Offer::where('status', '0')->get();
        return view('frontend.offers', compact('offers'));
    }

    public function contact()
    {
        // Increment contact clicks counter then show contact page
        try {
            ContactClick::incrementClick();
        } catch (\Exception $e) {
            // ignore if DB not migrated yet
        }
        return view('frontend.contact');
    }
}
