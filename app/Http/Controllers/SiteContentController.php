<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiteContentController extends BaseAdminController
{
    public function index()
{
    $content = DB::table('site_contents')->first();
    $site_content = DB::table('site_contents')->first();
    return view('pages.backend.site_content' ,compact('content' ,'site_content'));
}

public function update(Request $request)
    {
        $content = DB::table('site_contents')->first();

        // Handle image uploads
        $siteLogo = $content->site_logo ?? null;
        $footerLogo = $content->footer_logo ?? null;
        $faviconLogo = $content->favicon_logo ?? null;

        if ($request->hasFile('site_logo')) {
            $siteLogo = time() . '_site_logo.' . $request->site_logo->extension();
            $request->site_logo->move(public_path('backend/images/uploads'), $siteLogo);
        }

        if ($request->hasFile('footer_logo')) {
            $footerLogo = time() . '_footer_logo.' . $request->footer_logo->extension();
            $request->footer_logo->move(public_path('backend/images/uploads'), $footerLogo);
        }

        if ($request->hasFile('favicon_logo')) {
            $faviconLogo = time() . '_favicon_logo.' . $request->favicon_logo->extension();
            $request->favicon_logo->move(public_path('backend/images/uploads'), $faviconLogo);
        }

        DB::table('site_contents')->updateOrInsert(
            ['id' => 1],
            [
                'site_title'    => $request->site_title,
                'meta_title'    => $request->meta_title,
                'meta_tag'      => $request->meta_tags,
                'meta_keyword'  => $request->meta_keyword,
                'meta_desc'     => $request->meta_desc,
                'site_about'    => $request->site_about,
                'site_logo'     => $siteLogo,
                'footer_logo'   => $footerLogo,
                'favicon_logo'  => $faviconLogo,
                'updated_at'    => now(),
            ]
        );

        return redirect()->back()->with('message', 'Site Content Updated Successfully');
    }


}
