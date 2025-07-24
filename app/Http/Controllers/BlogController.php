<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = DB::select('
    SELECT blogs.*, categories.cate_name
    FROM blogs
    LEFT JOIN categories ON blogs.cate_id = categories.id
');
        $categories = DB::table('categories')->select('cate_name', 'id')->get();

        $site_content = DB::table('site_contents')->first();
        return view('pages.backend.allBlog', compact('blogs', 'categories' , 'site_content'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->select('cate_name', 'id')->get();
        $site_content = DB::table('site_contents')->first();
        return view('pages.backend.addBlog', compact('categories','site_content'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog_title = $request->blog_title;
        $category = $request->category;
        $blog_content = $request->blog_content;

        // Image Upload
        $logo = time() . '.' . $request->blog_image->extension();
        $request->blog_image->move(public_path('backend/images/blogs'), $logo);

        // Safe insert using parameter binding to avoid SQL injection and syntax errors
        DB::insert('INSERT INTO blogs (blog_title, cate_id, blog_content, blog_logo, created_at, updated_at)
                VALUES (?, ?, ?, ?, NOW(), NULL)',
            [$blog_title, $category, $blog_content, $logo]
        );

        return redirect('/admin/blog/create')->with([
            'message' => 'Blog added Successfully!',
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
        $data = DB::select('select * from blogs where id= "' . $id . '"');
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog_title = $request->e_blog_title;
        $category = $request->e_category;
        $blog_content = $request->e_blog_content;

        $blogs = DB::table('blogs')->where('id', $id)->first();
        if (!$blogs) {
            return response()->json(['error' => 'Blogs not found'], 404);
        }

        // Image Upload Fix
        if ($request->hasFile('e_blog_image')) {
            $editlogo = time() . '.' . $request->e_blog_image->extension();
            $request->e_blog_image->move(public_path('backend/images/blogs'), $editlogo);
        } else {
            $editlogo = $blogs->blog_logo;
        }

        DB::update(
            'UPDATE blogs SET blog_title = ?, cate_id = ?, blog_content = ?, blog_logo = ?, updated_at = NOW() WHERE id = ?',
            [$blog_title, $category, $blog_content, $editlogo, $id]
        );

        return redirect('/admin/blog/')->with(key: [
            'message' => 'Blog Updated successfully!',
            'type' => 'success'
        ]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $deleted = DB::table('blogs')->where('id', $id)->delete();


        if ($deleted) {
            return response()->json(['message' => 'Blog deleted successfully']);
        } else {
            return response()->json(['message' => 'Blog not found'], 404);
        }
    }
}
