<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        // status 
        $products = Product::where('status', 1)->get();
        return view('welcome', compact('products'));
    }

    // 往使用者資訊頁面
    public function user_info(Request $request)
    {
        // 法一
        // dd(
        //     Auth::user()
        // );
        // 法二
        $user = $request->user();
        return view('userSetting',compact('user'));
    }
    public function user_info_update(Request $request)
    {
        // $request->validate([
        //     'name'=>'required|max:255',
        // ],[
        //     'name.required'=>'名稱必填',
        //     'name.max'=>'太長了',
        // ]);

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:255',
        ],);
        if ($validator->fails()) {
            # code...
            return redirect(route('user.info'))->withErrors(['nameError'=>'帳號名稱字數過多']);
        }
        // 法一
        // dd(
        //     Auth::user()
        // );
        // 法二
        $user = $request->user();
        $user->update([
            'name'=> $request->name,
        ]);
        return redirect(route('user.info'));
    }


    public function test(Request $request)
    {
        dd($request->all());
        return view('test');
    }
    public function fetchTest(Request $request)
    {
        dd($request->all());
    }
}
