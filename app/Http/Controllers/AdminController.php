<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



use Illuminate\Http\Request;

class AdminController extends BaseAdminController
{
    public function Home()
    {
         if (!Session::has('admin_logged_in')) {
        return redirect('/admin/login');
    }
        $categoriesCount = DB::select("SELECT COUNT(*) as total  FROM categories")[0]->total;
        $storeCount = DB::select("SELECT COUNT(*) as total  FROM stores")[0]->total;
        $couponCount = DB::select("SELECT COUNT(*) as total  FROM coupons")[0]->total;
        $blogCount = DB::select("SELECT COUNT(*) as total  FROM blogs")[0]->total;
        $site_content = DB::table('site_contents')->first();
        return view('pages.backend.home', compact('categoriesCount', 'storeCount', 'couponCount', 'blogCount' , 'site_content'));
    }
}
