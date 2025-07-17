<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Home()
    {
        $categoriesCount = DB::select("SELECT COUNT(*) as total  FROM categories")[0]->total;
        return view('pages.backend.home', compact('categoriesCount'));
    }
}
