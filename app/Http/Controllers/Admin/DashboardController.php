<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Shop;
use App\Models\User;
use App\Models\ContactClick;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countcat = Category::count();

        $countshop = Shop::count();
        $monthshop = Shop::whereMonth('created_at', date('m'))->count();
        $lmonthshop = Shop::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->count();

        $countoffer = Offer::count();
        $countactiveoffer = Offer::where('status', '0')->count();
        $counttrendingoffer = Offer::where('trending', '1')->where('status', '0')->count();
        $monthoffer = Offer::whereMonth('created_at', date('m'))->count();
        $lmonthoffer = Offer::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->count();

        $countuser = User::count();
        $monthuser = User::whereMonth('created_at', date('m'))->count();
        $lmonthuser = User::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->count();


        $visitorCount = \App\Helpers\VisitorHelper::getCount();
        $contactClicks = 0;
        try {
            $contactClicks = ContactClick::getCount();
        } catch (\Exception $e) {
            $contactClicks = 0;
        }

        return view('admin.index',
        compact('countcat', 'countshop', 'countoffer', 'countactiveoffer', 'counttrendingoffer', 'countuser', 'monthshop', 'lmonthshop', 'visitorCount',
        'monthoffer', 'lmonthoffer', 'monthuser', 'lmonthuser', 'contactClicks'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $input = $request->all();
        $user->create($input);
        return redirect()->back()->with('status', "Added Successfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect()->back()->with('status', "Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status', "Deleted Successfully");
    }
}
