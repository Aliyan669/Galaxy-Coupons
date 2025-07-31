<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $coupons = DB::select(query: '
    SELECT coupons.*, stores.store_name, stores.store_logo,stores.store_url
    FROM coupons
    LEFT JOIN stores ON coupons.store_id = stores.id LIMIT 8
');
        $top_blogs = DB::select("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 2");
        $site_blogs = DB::select("select * from blogs ORDER BY blog_title ASC LIMIT 3");
        $latest_blogs = DB::select("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 6");
        $blogs = DB::select("select * from blogs LIMIT 4");
        $new_blogs = DB::select("select * from blogs ORDER BY blog_title ASC LIMIT 6");
        $site_content = DB::table('site_contents')->first();

        return view('pages.frontend.home', compact('top_blogs', 'site_blogs', 'latest_blogs', 'blogs', 'new_blogs', 'coupons', 'site_content'));
    }


    public function Stores()
    {

        $stores = DB::table('stores')
            ->select('store_name', 'slug', 'store_logo') // slug ya id for links
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

        $site_content = DB::table('site_contents')->first();
        return view('pages.frontend.stores', compact('groupedStores', 'site_content'));
    }

    // public function Blogs()
    // {
    //     $stores = DB::select("select * from stores LIMIT 6");
    //     $blogs = DB::select("select * from blogs");
    //     $site_content = DB::table('site_contents')->first();
    //     return view('pages.frontend.blogs', compact('stores', 'site_content', 'blogs'));
    // }


    public function Entertainment()
    {
        $site_blogs = DB::select("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 5");
        $blogs = DB::table('blogs')
            ->join('categories', 'blogs.cate_id', '=', 'categories.id')
            ->where('categories.cate_name', 'Entertainment')
            ->select('blogs.*', 'categories.cate_name as cate_name')
            ->orderBy('blogs.created_at', 'DESC')
            ->get();
        $site_content = DB::table('site_contents')->first();
        return view('pages.frontend.entertainment', compact('site_blogs', 'site_content', 'blogs'));
    }


    public function Apparel()
    {
        $site_blogs = DB::select("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 5");
        $blogs = DB::table('blogs')
            ->join('categories', 'blogs.cate_id', '=', 'categories.id')
            ->where('categories.cate_name', 'Apparel & Clothing')
            ->select('blogs.*', 'categories.cate_name as cate_name')
            ->orderBy('blogs.created_at', 'DESC')
            ->get();
        $site_content = DB::table('site_contents')->first();
        return view('pages.frontend.apparel', compact('site_blogs', 'site_content', 'blogs'));
    }


    public function Travel()
    {

        $site_blogs = DB::select("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 4");
        $site_blogs = DB::select("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 5");
        $blogs = DB::table('blogs')
            ->join('categories', 'blogs.cate_id', '=', 'categories.id')
            ->where('categories.cate_name', 'Travel')
            ->select('blogs.*', 'categories.cate_name as cate_name')
            ->orderBy('blogs.created_at', 'DESC')
            ->get();
        $site_content = DB::table('site_contents')->first();
        return view('pages.frontend.travel', compact('site_blogs', 'site_content', 'blogs'));
    }


    public function Categories()
    {
        $categories = DB::select("select * from categories");
        $site_content = DB::table('site_contents')->first();
        return view('pages.frontend.categories', compact('categories', 'site_content'));
    }



    public function StoreProfile($slug)
    {
        // 1. Slug se store dhoondo
        $store = DB::table('stores')->where('slug', $slug)->first();
        if (!$store) {
            abort(404); // agar store nahi mila
        }

        // 2. Store ke coupons le lo
        $coupons = DB::table('coupons')
            ->where('store_id', $store->id)
            ->orderBy('sort_order', 'asc')
            ->get();

        // 3. View pe bhej do

        $site_content = DB::table('site_contents')->first();
        return view('pages.frontend.store_profile', compact('store', 'coupons', 'site_content'));
    }


    public function BlogDetail($slug)
    {
        $site_content = DB::table('site_contents')->first();
        $site_blogs = DB::select("select * from blogs LIMIT 4");
        $blog_detail = DB::table('blogs')->where('slug', $slug)->first();
        if (!$blog_detail) {
            abort(404); // agar store nahi mila
        }
        return view('pages.frontend.blog_detail', compact('site_content', 'site_blogs', 'blog_detail'));
    }
}
