<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('pages.frontend.home');
    }
    public function Stores()
    {
        return view('pages.frontend.stores');
    }
    public function Blogs()
    {
        return view('pages.frontend.blogs');
    }
    public function Categories()
    {
        return view('pages.frontend.categories');
    }

    public function StoreProfile()
    {
        return view('pages.frontend.store_profile');
    }
}
