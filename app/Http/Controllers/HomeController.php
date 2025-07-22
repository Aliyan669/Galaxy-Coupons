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
        return view('pages.frontend.stores');
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

    public function StoreProfile()
    {
        return view('pages.frontend.store_profile');
    }
}
