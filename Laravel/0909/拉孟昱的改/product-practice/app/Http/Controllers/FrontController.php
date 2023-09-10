<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->flush();
        // status 
        $products = Product::where('status', 1)->get();
        return view('welcome', compact('products'));
    }

    // 往使用者資訊頁
    public function user_info(Request $request)
    {
        // 法一
        // dd(Auth::user());
        // $user = Auth::user();

        // 法二
        // dd($request->user());
        $user = $request->user();

        return view('userSetting', compact('user'));
    }

    public function user_info_update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ], [
            'name.required' => '必填',
            'name.max' => '字數過長',
        ]);


        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        // ]);

        // if ($validator->fails()) {
        //     return redirect(route('user.info'))->withErrors(['nameError' => '帳號名稱字數過多']);
        // }
        // 法一
        // dd(Auth::user());
        // $user = Auth::user();

        // 法二
        // dd($request->user());
        $user = $request->user();

        $user->update([
            'name' => $request->name,
        ]);

        return redirect(route('user.info'));
    }








    public function test1(Request $request)
    {
        // $hasBeen = $request->session()->get('mytest','沒去過2');
        // $request->session()->forget('mytest');
        
        $phone = $request->session()->get('form_phone','');
        $name = $request->session()->get('form_name','');
        // dd($request->all());
        return view('test',compact('phone','name'));
    }
    public function step1_store(Request $request)
    {
        $request->validate([
            'phone'=>'required',
            'name'=>'required',
        ]);
        $request->session()->put('form_phone',$request->phone);
        $request->session()->put('form_name',$request->name);
        return redirect(route('test.step2'));
    }
    public function test2(Request $request)
    {
        // $hasBeen = $request->session()->get('mytest','沒去過');
        // $request->session()->forget('mytest');
        // dd($request->all());
        // $request->session()->put('mytest','去過了');
        $phone = $request->session()->get('form_phone','');
        $name = $request->session()->get('form_name','');
        return view('test2',compact('phone','name'));
    }
    public function fetchTest(Request $request)
    {
        dd($request->all());
    }
}
