<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Category;
use App\Models\Shop;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::with(['category', 'shop'])->get();
        $categories = Category::all();
        $shops = Shop::all();
        return view('admin.offers', compact('offers', 'categories', 'shops'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offer = new Offer();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/offers', $filename);
            $offer->image = $filename;
        }
        $offer->cate_id = $request->input('cate_id');
        $offer->shop_id = $request->input('shop_id');
        $offer->name = $request->input('name');
        $offer->slug = $request->input('slug');
        $offer->offer_price = $request->input('offer_price');
        $offer->original_price = $request->input('original_price');
        $offer->period = $request->input('period');
        $offer->phone = $request->input('phone');
        $offer->phone2 = $request->input('phone2');
        $offer->description = $request->input('description');
        $offer->status = $request->input('status') == true ? '1':'0';
        $offer->trending = $request->input('trending') == true ? '1':'0';
        $offer->save();
        return redirect()->back()->with('status', "Offer Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $offer = Offer::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/offers/'.$offer->image;
            if(File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/offers', $filename);
            $offer->image = $filename;
        }
        $offer->name = $request->input('name');
        $offer->cate_id = $request->input('cate_id');
        $offer->shop_id = $request->input('shop_id');
        $offer->offer_price = $request->input('offer_price');
        $offer->original_price = $request->input('original_price');
        $offer->period = $request->input('period');
        $offer->description = $request->input('description');
        $offer->status = $request->input('status') == true ? '1':'0';
        $offer->trending = $request->input('trending') == true ? '1':'0';
        $offer->update();
        return redirect()->back()->with('status', "Offer Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offer = Offer::find($id);
        if ($offer->image) {
            $path = 'assets/uploads/offers/'.$offer->image;
            if(File::exists($path)) {
                File::delete($path);
            }
        }
        $offer->delete();
        return redirect()->back()->with('status', "Offer Deleted Successfully");
    }
}
