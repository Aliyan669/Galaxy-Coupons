<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BaseAdminController extends Controller
{
    public function __construct()
    {

        $site_content = DB::table('site_contents')->first();
        if (!Session::has('admin_logged_in')) {
            redirect('/admin/login')->send(); // force redirect if not logged in
        }
    }
}
