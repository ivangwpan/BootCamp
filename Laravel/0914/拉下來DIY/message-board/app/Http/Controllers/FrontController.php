<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;
use  App\Models\Cart;
use App\Models\OrderForm;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('status', '=', 1)->get();
        return view('welcome', compact('products'));
    }


    // 使用者資訊頁
    public function user_info(Request $request)
    {
        // 法一(拿到使用者資訊)
        // dd(Auth::user();

        // 法二
        // dd($request->user());
        $user = $request->user();
        return view('userSetting', compact('user'));
    }


    public function user_info_update(Request $request)
    {
        // 方法一
        $request->validate([
            'name' => 'required|max:255',
        ], [
            'name.required' => '名字必填',
            'name.max' => '字數過長',
        ]);

        //    $validator= Validator::make($request->all(), [
        //         'name' => 'required|max:255',
        //     ]);
        //     // dd($validator->fails());
        //     if($validator->fails()){
        //         return redirect(route('user.info'))->withErrors(['nameError'=>'帳號名稱字數過多']);
        //     }


        $user = $request->user();
        $user->update([
            'name' => $request->name,
        ]);
        // return view('userSetting');
        return redirect(route('user.info'));
    }

    public function test(Request $request)
    {

        $hasBeen = $request->session()->get('mytest');
        $request->session()->forget('mytest');
        return view('test', compact('hasBeen'));
    }

    public function test2(Request $request)
    {
        // $request->session()->put('mytest','曾經到過test1');
        $phone =   $request->session()->get('form_phone', '');
        return view('test2', compact('phone'));
    }


    public function testStore(Request $request)
    {
        $request->validate([
            'phone' => 'required',
        ]);
        $request->session()->put('form_phone', $request->phone);
        return redirect('test2');
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
            'product_id' => 'required|exists:products,id|numeric',

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
        // User::updateOrcreate(['name'=>'Lisi'])


        // $cart = Cart::create([
        //     'product_id'=>$request->product_id,
        //     'qty'=>$request->qty,
        //     'user_id'=>$request->user()->id,
        // ]);
        return (object)[
            'code' => $cart ? 1 : 0,
            'product_id' => $request->product_id,
        ];
        // $request->session()->put('form_phone',$request->phone);
        // return redirect('test2');
    }
    public function order_list(Request $request)
    {
        $user = $request->user();

        $orders = OrderForm::where('user_id', $user->id)->orderBy('id', 'desc')->get();

        return view('userOrder', compact('orders'));
    }

    public function order_detail(Request $request, $order_forms_id)
    {
        // dd($order_forms_id);

        $user = $request->user();

        $orders = OrderForm::where('user_id', $user->id)->find($order_forms_id);

        return view('orderDetail', compact('orders'));
    }

    public function ec_pay(Request $request, $order_id)
    {
        // dd(date('Y/m/d H:i:s'));
        $user = $request->user();
        $order = OrderForm::where('user_id', $user->id)->find($order_id);
        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $shuffle = str_shuffle($string);
        if ($order) {
            # code...
            $data = (object)[
                'MerchantID' => '3002607',
                'MerchantTradeNo' => $order->order_id . substr($shuffle, 0, 3),
                'MerchantTradeDate' => date('Y/m/d H:i:s'),
                'PaymentType' => 'aio',
                'TotalAmount' => $order->total,
                'TradeDesc' => '澳門線上賭場',
                'ItemName' => '撲克牌',
                'ReturnURL' => route('ecpay.returnBack'),
                'ChoosePayment' => 'ALL',


                'CheckMacValue' => '',


                'EncryptType' => '1',
                'ClientBackURL' => route('nameIndex'),
                'IgnorePayment' => 'WebATM#CVS#BARCODE',
            ];

            $HashKey = 'pwFHCqoQZGmho4w6';
            $HashIV = 'EkRm7iFT261dpevs';

            $step1 = "ChoosePayment={$data->ChoosePayment}&ClientBackURL={$data->ClientBackURL}&EncryptType={$data->EncryptType}&IgnorePayment={$data->IgnorePayment}&ItemName={$data->ItemName}&MerchantID={$data->MerchantID}&MerchantTradeDate={$data->MerchantTradeDate}&MerchantTradeNo={$data->MerchantTradeNo}&PaymentType={$data->PaymentType}&ReturnURL={$data->ReturnURL}&TotalAmount={$data->TotalAmount}&TradeDesc={$data->TradeDesc}";

            $step2 = "HashKey={$HashKey}&{$step1}&HashIV={$HashIV}";

            $step3 = urlencode($step2);
            // dd($step3);

            $step4 = strtolower($step3);
            // dd($step4);

            $step5 = hash('sha256', $step4);
            // dd($step5);

            $step6 = strtoupper($step5);
            // dd($step6);
            
            $data->CheckMacValue = $step6;

            // 測試用

            // $originString = "
            // ChoosePayment={$data->ChoosePayment}&
            // ClientBackURL={$data->ClientBackURL}&
            // EncryptType={$data->EncryptType}&
            // IgnorePayment={$data->IgnorePayment}&
            // ItemName={$data->ItemName}&
            // MerchantID={$data->MerchantID}&
            // MerchantTradeDate={$data->MerchantTradeDate}&
            // MerchantTradeNo={$data->MerchantTradeNo}&
            // PaymentType={$data->PaymentType}&
            // ReturnURL={$data->ReturnURL}&
            // TotalAmount={$data->TotalAmount}&
            // TradeDesc={$data->TradeDesc}
            // ";




            return view('ecpay', compact('data'));
        } else {
            return redirect('/');
        }
        // dd($request->session()->get('form_id'));
    }
    public function ec_pay_return(Request $request)
    {
        // 綠界打不回來
        dd($request->all());
    }
}
