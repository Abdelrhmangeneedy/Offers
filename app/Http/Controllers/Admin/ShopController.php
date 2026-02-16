<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::with('category')->orderBy('created_at', 'DESC')->paginate(10);
        $categories = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.shops', compact('shops', 'categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shop = new Shop();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/shops', $filename);
            $shop->image = $filename;
        }
        $shop->cate_id = $request->input('cate_id');
        $shop->name = $request->input('name');
        $shop->slug = $request->input('slug');
        $shop->description = $request->input('description');
        $shop->status = $request->input('status') == true ? '1':'0';
        $shop->trending = $request->input('trending') == true ? '1':'0';
        $shop->save();
        return redirect()->back()->with('status', "Shop Added Successfully");
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $shop = Shop::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/shops/'.$shop->image;
            if(File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/shops', $filename);
            $shop->image = $filename;
        }
        $shop->name = $request->input('name');
        $shop->cate_id = $request->input('cate_id');
        $shop->description = $request->input('description');
        $shop->status = $request->input('status') == true ? '1':'0';
        $shop->trending = $request->input('trending') == true ? '1':'0';
        $shop->update();
        return redirect()->back()->with('status', "Shop Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $shop = Shop::find($id);
        if ($shop->image) {
            $path = 'assets/uploads/shops/'.$shop->image;
            if(File::exists($path)) {
                File::delete($path);
            }
        }
        $shop->delete();
        return redirect()->back()->with('status', "Shop Deleted Successfully");
    }
}
