<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index(Request $request)
    {
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

    public function product()
    {
        $products = Product::where('status', 1)->get();
        return view('frontProduct', compact('products'));
    }

    public function add_cart(Request $request)
    {

        $request->validate([
            'qty' => 'required|min:1|numeric',
            'product_id' => 'required|exists:products,id|numeric'
        ]);

        // 寫法一
        $oddCart = Cart::where('user_id', $request->user()->id)->where('product_id', $request->product_id)->first();
        if ($oddCart) {
            $cart = $oddCart->update([
                'qty' => $oddCart->qty + $request->qty,
            ]);
        } else {
            $cart = Cart::create([
                'product_id' => $request->product_id,
                'qty' => $request->qty,
                'user_id' => $request->user()->id,
            ]);
        }

        // 寫法二
        // User::updateOrCreate(['name' => 'Lisi'], ['age' => 20]);
        // $cart = Cart::updateOrCreate([
        //     'user_id' => $request->user()->id,
        //     'product_id' => $request->product_id,
        // ], [
        //     'qty' => 456,
        // ]);
        

        return (object)[
            'code' => $cart ? 1 : 0,
            'product_id' => $request->product_id,
        ];
    }








    public function test(Request $request)
    {
        // // 取得session中key的資料 (參數1=>自行設定的key, 參數2 => 假設沒有找到則使用預設資料)
        // $hasBeen = $request->session()->get('mytest', '沒有去過step2');
        // // 清除session中key的資料
        // $request->session()->forget('mytest');
        $phone = $request->session()->get('form_phone', '');
        $name = $request->session()->get('form_name', '');

        return view('test',compact('phone', 'name'));
    }
    public function step1_store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'name' => 'required',
        ]);

        $request->session()->put('form_phone', $request->phone);
        $request->session()->put('form_name', $request->name);

        return redirect(route('test.step2'));
    }
    public function test2(Request $request)
    {
        // 設置session中key的資料
        // $request->session()->put('mytest', '曾經到過step2');
        $phone = $request->session()->get('form_phone', '');

        return view('test2',compact('phone'));
    }


    public function fetchTest(Request $request)
    {
        dd($request->all());
    }
}
