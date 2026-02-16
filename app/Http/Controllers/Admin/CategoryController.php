<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == true ? '1':'0';
        $category->trending = $request->input('trending') == true ? '1':'0';
        
        $category->save();
        return redirect()->back()->with('status', "Added Successfully");
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $category = Category::find($id);

        if ($request->hasFile('image')) {
            $path = 'assets/uploads/category/'.$category->image;
             if(File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == true ? '1':'0';
        $category->trending = $request->input('trending') == true ? '1':'0';
        
        $category->update();
        return redirect()->back()->with('status', "Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('status', "Deleted Successfully");
    }
}
