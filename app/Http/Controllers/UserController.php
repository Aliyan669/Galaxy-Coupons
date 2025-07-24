<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends BaseAdminController
{
      public function editUser()
{
    $user = DB::table('admin_auth')->where('id', 1)->first(); // Change table name if needed
    $site_content = DB::table('site_contents')->first();
    return view('pages.backend.user', compact('user','site_content'));
}

public function updateUser(Request $request)
{
    // $request->validate([
    //     'email' => 'required|email',
    //     'password' => 'nullable|min:6'
    // ]);

    $data = ['email' => $request->email];

    if ($request->password) {
        $data['password'] = Hash::make($request->password);
    }

    DB::table('admin_auth')->where('id', 1)->update($data); // Change table name if needed

    return back()->with('success', 'User info updated successfully!');
}
}
