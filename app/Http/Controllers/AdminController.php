<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Home()
    {
        $categoriesCount = DB::select("SELECT COUNT(*) as total  FROM categories")[0]->total;
        $storeCount = DB::select("SELECT COUNT(*) as total  FROM stores")[0]->total;
        $couponCount = DB::select("SELECT COUNT(*) as total  FROM coupons")[0]->total;
        $blogCount = DB::select("SELECT COUNT(*) as total  FROM blogs")[0]->total;

        return view('pages.backend.home', compact('categoriesCount', 'storeCount', 'couponCount', 'blogCount'));
    }
}
