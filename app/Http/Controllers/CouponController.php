<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = DB::select('
    SELECT coupons.*, stores.store_name, stores.store_logo
    FROM coupons
    LEFT JOIN stores ON coupons.store_id = stores.id
');
        $stores = DB::table('stores')->select('store_name', 'id')->get();
        return view('pages.backend.allCoupon', compact('stores', 'coupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $store = DB::table('stores')->select('store_name', 'id')->get();
        return view('pages.backend.addCoupon', compact('store'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coupon_title = $request->coupon_title;
        $coupon_desc = $request->coupon_desc;
        $store_url = $request->store_url;
        $coupon_code = $request->coupon_code;
        $store = $request->store;

        DB::select('INSERT INTO `coupons`(`coupon_title`, `coupon_desc`,`store_url`,`coupon_code`,`store_id`, `created_at`, `updated_at`) VALUES ("' . $coupon_title . '","' . $coupon_desc . '","' . $store_url . '", "' . $coupon_code . '" ,"' . $store . '" , CURRENT_TIMESTAMP, NULL);');

        return redirect('/admin/coupon/create')->with([
            'message' => 'Coupon added Successfully!',
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
        $data = DB::select('select * from coupons where id= "' . $id . '"');
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $title = $request->e_coupon_title;
        $desc = $request->e_coupon_desc;
        $url = $request->e_store_url;
        $coupon_code = $request->e_coupon_code;
        $store = $request->e_store;

        $coupon = DB::table('coupons')->where('id', $id)->first();
        if (!$coupon) {
            return response()->json(['error' => 'Coupon not found'], 404);
        }

        DB::select('UPDATE `coupons` SET `coupon_title`= "' . $title . '",`coupon_desc`= "' . $desc . '", `store_url`= "' . $url . '", `coupon_code`="' . $coupon_code . '" , `store_id`= "' . $store . '" ,`updated_at`= NOW() WHERE id = "' . $id . '"');

        return redirect('/admin/coupon/')->with(key: [
            'message' => 'Coupon Updated successfully!',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('coupons')->where('id', $id)->delete();


        if ($deleted) {
            return response()->json(['message' => 'Store deleted successfully']);
        } else {
            return response()->json(['message' => 'Store not found'], 404);
        }
    }
}
