<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BannerController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $banner = DB::select("select * from banners");
         $site_content = DB::table('site_contents')->first();
        return view('pages.backend.allbanner', compact('banner','site_content' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $site_content = DB::table('site_contents')->first();
       return view('pages.backend.addbanner',compact('site_content') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner_name = $request->banner_name;

        $logo = time() . '.' . $request->banner_image->extension();
        $request->banner_image->move(public_path('backend/images/banner'), $logo);


        DB::select('INSERT INTO `banners`(`banner_name`, `banner_image`, `created_at`, `updated_at`) VALUES ("' . $banner_name . '","' . $logo . '", CURRENT_TIMESTAMP, NULL);');

        return redirect('/admin/banner/create')->with([
            'message' => 'Banner added Successfully!',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $data = DB::select('select * from banners where id= "' . $id . '"');
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->e_banner_name;
    

        $banner = DB::table('banners')->where('id', $id)->first();
        if (!$banner) {
            return response()->json(['error' => 'Banner not found'], 404);
        }

        // Image Upload Fix
        if ($request->hasFile('e_banner_image')) {
            $editlogo = time() . '.' . $request->e_banner_image->extension();
            $request->e_banner_image->move(public_path('backend/images/banner'), $editlogo);
        } else {
            $editlogo = $banner->banner_image;
        }


        DB::select('UPDATE `banners` SET `banner_name`= "' . $name . '",`banner_image`="' . $editlogo . '",`updated_at`= NOW() WHERE id = "' . $id . '"');


        return redirect('/admin/banner/')->with(key: [
            'message' => 'Banner Updated successfully!',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('banners')->where('id', $id)->delete();


        if ($deleted) {
            return response()->json(['message' => 'Banners deleted successfully']);
        } else {
            return response()->json(['message' => 'Banners not found'], 404);
        }
    }
}
