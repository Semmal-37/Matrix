<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commission;
use DB;
class CommissionController extends Controller
{
    public function index()

    {

        $roles = DB::table('matrix')->pluck('level_1');
        var_dump($roles);

        return view('commission');

    }

    public function save(Request $request)

    {

        $commission = new Commission;

        $commission->lvl_1 = $request->level1;
        $commission->lvl_2 = $request->level2;
        $commission->lvl_3 = $request->level3;
        $commission->lvl_4 = $request->level4;
        $commission->lvl_5 = $request->level5;
        $commission->lvl_6 = $request->level6;
        $commission->lvl_7 = $request->level7;
        $commission->lvl_8 = $request->level8;
        $commission->lvl_9 = $request->level9;
        $commission->lvl_10 = $request->level10;

        $commission->save();

        return back()->with('success', 'New Commission created successfully.');
    }

    public function show(){

        $product_price=23000;
        $matx = DB::table('commision')->where('sponsor', 1000)->first();

        $l1cm=($matx->lvl_1 / 100) * $product_price;
        $l2cm=($matx->lvl_2 / 100) * $product_price;
        $l3cm=($matx->lvl_3 / 100) * $product_price;
        $l4cm=($matx->lvl_4 / 100) * $product_price;
        $l5cm=($matx->lvl_5 / 100) * $product_price;
        $l6cm=($matx->lvl_6 / 100) * $product_price;
        $l7cm=($matx->lvl_7 / 100) * $product_price;
        $l8cm=($matx->lvl_8 / 100) * $product_price;
        $l9cm=($matx->lvl_9 / 100) * $product_price;
        $l10cm=($matx->lvl_10 / 100) * $product_price;
        return view('cmdata',compact( 'l1cm','l2cm','l3cm','l4cm','l5cm','l6cm','l7cm','l8cm','l9cm','l10cm'));

    }
}
