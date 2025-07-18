<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::select("select * from categories");
        return view('pages.backend.allCategories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.addCategories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cate_name = $request->cate_name;
        $meta_title = $request->meta_title;
        $meta_desc = $request->meta_desc;

        $logo = time() . '.' . $request->cate_logo->extension();
        $request->cate_logo->move(public_path('backend/images/categories'), $logo);


        DB::select('INSERT INTO `categories`(`cate_name`, `meta_title`, `meta_desc`, `cate_logo`, `created_at`, `updated_at`) VALUES ("' . $cate_name . '", "' . $meta_title . '" ,"' . $meta_desc . '" ,"' . $logo . '", CURRENT_TIMESTAMP, NULL);');

        return redirect('/admin/categories/create')->with([
            'message' => 'Categories added Successfully!',
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
        $data = DB::select('select * from categories where id= "' . $id . '"');
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->e_cate_name;
        $title = $request->e_meta_title;
        $desc = $request->e_meta_desc;


        $categories = DB::table('categories')->where('id', $id)->first();
        if (!$categories) {
            return response()->json(['error' => 'Categories not found'], 404);
        }

        // Image Upload Fix
        if ($request->hasFile('e_cate_logo')) {
            $editlogo = time() . '.' . $request->e_cate_logo->extension();
            $request->e_cate_logo->move(public_path('backend/images/categories'), $editlogo);
        } else {
            $editlogo = $categories->cate_logo;
        }


        DB::select('UPDATE `categories` SET `cate_name`= "' . $name . '",`meta_title`= "' . $title . '",`meta_desc`= "' . $desc . '",`cate_logo`="' . $editlogo . '",`updated_at`= NOW() WHERE id = "' . $id . '"');


        return redirect('/admin/categories/')->with(key: [
            'message' => 'Categoires Updated successfully!',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('categories')->where('id', $id)->delete();


        if ($deleted) {
            return response()->json(['message' => 'Categories deleted successfully']);
        } else {
            return response()->json(['message' => 'Categories not found'], 404);
        }
    }

}
