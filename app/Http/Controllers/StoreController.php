<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = DB::select('
    SELECT stores.*, categories.cate_name
    FROM stores
    LEFT JOIN categories ON stores.cate_id = categories.id
');
        $categories = DB::table('categories')->select('cate_name', 'id')->get();
        return view('pages.backend.allStore', compact('store', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->select('cate_name', 'id')->get();
        return view('pages.backend.addStore', compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store_name = $request->store_name;
        $store_desc = $request->store_desc;
        $store_url = $request->store_url;
        $meta_title = $request->meta_title;
        $meta_desc = $request->meta_desc;
        $category = $request->category;


        $logo = time() . '.' . $request->store_logo->extension();
        $request->store_logo->move(public_path('backend/images/stores'), $logo);


        DB::select('INSERT INTO `stores`(`store_name`, `store_desc`,`store_url`,`meta_title`, `meta_desc`,`cate_id`, `store_logo`, `created_at`, `updated_at`) VALUES ("' . $store_name . '","' . $store_desc . '","' . $store_url . '", "' . $meta_title . '" ,"' . $meta_desc . '" ,"' . $category . '" ,"' . $logo . '", CURRENT_TIMESTAMP, NULL);');

        return redirect('/admin/store/create')->with([
            'message' => 'Stores added Successfully!',
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
        $data = DB::select('select * from stores where id= "' . $id . '"');
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->e_store_name;
        $store_desc = $request->e_store_desc;
        $url = $request->e_store_url;
        $title = $request->e_meta_title;
        $desc = $request->e_meta_desc;
        $category = $request->e_category;

        $store = DB::table('stores')->where('id', $id)->first();
        if (!$store) {
            return response()->json(['error' => 'Store not found'], 404);
        }

        // Image Upload Fix
        if ($request->hasFile('e_store_logo')) {
            $editlogo = time() . '.' . $request->e_store_logo->extension();
            $request->e_store_logo->move(public_path('backend/images/stores'), $editlogo);
        } else {
            $editlogo = $store->store_logo;
        }


        DB::select('UPDATE `stores` SET `store_name`= "' . $name . '",`store_desc`= "' . $store_desc . '", `store_url`= "' . $url . '",`meta_title`= "' . $title . '",`meta_desc`= "' . $desc . '",`store_logo`="' . $editlogo . '", `cate_id`= "' . $category . '" ,`updated_at`= NOW() WHERE id = "' . $id . '"');


        return redirect('/admin/store/')->with(key: [
            'message' => 'Stores Updated successfully!',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('stores')->where('id', $id)->delete();


        if ($deleted) {
            return response()->json(['message' => 'Store deleted successfully']);
        } else {
            return response()->json(['message' => 'Store not found'], 404);
        }
    }
}
