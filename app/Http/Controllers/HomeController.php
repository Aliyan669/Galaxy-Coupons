<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $coupons = DB::select(query: '
    SELECT coupons.*, stores.store_name, stores.store_logo
    FROM coupons
    LEFT JOIN stores ON coupons.store_id = stores.id LIMIT 8
');
        $categories = DB::select("select * from categories LIMIT 6");
        $stores = DB::select("select * from stores LIMIT 6");
        return view('pages.frontend.home', compact('categories', 'stores', 'coupons'));
    }




    public function Stores()
    {
       
    $stores = DB::table('stores')
        ->select('store_name', 'store_url' ,'store_logo') // slug ya id for links
        ->orderBy('store_name')
        ->get();

    $groupedStores = [];

    foreach ($stores as $store) {
        $firstLetter = strtoupper(substr($store->store_name, 0, 1));
        if (!preg_match('/[A-Z]/', $firstLetter)) {
            $firstLetter = '0-9';
        }
        $groupedStores[$firstLetter][] = $store;
    }

    ksort($groupedStores);
        return view('pages.frontend.stores' ,compact('groupedStores'));
    }




    public function Blogs()
    {
        $stores = DB::select("select * from stores LIMIT 6");
        return view('pages.frontend.blogs', compact('stores'));
    }



    public function Categories()
    {
        $categories = DB::select("select * from categories");
        return view('pages.frontend.categories', compact('categories'));
    }


    public function StoreProfile($slug)
    {
            // 1. Slug se store dhoondo
    $store = DB::table('stores')->where('store_url', $slug)->first();
    if (!$store) {
        abort(404); // agar store nahi mila
    }

    // 2. Store ke coupons le lo
    $coupons = DB::table('coupons')
                ->where('store_id', $store->id)
                ->get();

    // 3. View pe bhej do
        return view('pages.frontend.store_profile', compact('store', 'coupons'));
    }



}
