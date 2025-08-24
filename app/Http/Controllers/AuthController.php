<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        $site_content = DB::table('site_contents')->first();
        return view('auth.login', compact('site_content'));

    }

    public function login(Request $request)
    {

        $admin = DB::table('admin_auth')->where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_logged_in', true);
            return redirect('/admin');
        }

        return back()->with('error', 'Invalid credentials!');
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect('/admin/login');
    }

}
