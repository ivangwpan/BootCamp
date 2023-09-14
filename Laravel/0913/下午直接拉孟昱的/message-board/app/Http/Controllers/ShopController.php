<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use Illuminate\Http\Request;
use  App\Models\Cart;
use  App\Models\OrderForm;
use  App\Models\ProductOrder;
use Illuminate\Support\Facades\Mail;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePrice(Request $request)
    {


        // return redirect(route('shopDeliverGet'));


    }
    public function storeDeliver(Request $request)
    {
        // 驗證

        $request->session()->put('name', $request->name);
        $request->session()->put('address', $request->address);
        $request->session()->put('date', $request->date);
        $request->session()->put('phone', $request->phone);
        $request->session()->put('menu', $request->menu);




        return redirect(route('shopMoneyGet'));
    }
    public function storeMoney(Request $request)
    {
        $request->validate([
            'pay' => 'required|numeric',
        ]);


        $itembuys = Cart::where('user_id', $request->user()->id)->get();
        // $itembuys = Cart::get();
        // foreach($itembuys as $value){
        // };

        $todayOrder = OrderForm::whereDate('created_at', today())->get()->count();

        $todayOrderCount = str_pad($todayOrder, 4, '0', STR_PAD_LEFT);

        $randomString = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $suffleString = str_shuffle($randomString);
        
        $form =  OrderForm::create([
            'order_id' => 'HW' . date('Ymd') . $todayOrderCount . substr($suffleString, 0, 6),
            'user_id' => $request->user()->id,
            'name' => session()->get('name'),
            'address' => session()->get('address'),
            'date' => session()->get('date'),
            'phone' => session()->get('phone'),
            'menu' => session()->get('menu') ?? '',
            'total' => session()->get('total'),
            'pay' => $request->pay,
        ]);

        $total = 0;


        foreach ($itembuys as $value) {
            $total += $value->product_withTrashed->price * $value->qty;
            # code...
            ProductOrder::create([
                'form_id' => $form->id,
                'qty' => $value->qty,
                'price' => $value->product->price,
                'name' => $value->product->name,
                'image' => $value->product->image,
                'desc' => $value->product->desc,
            ]);

            $value->delete();
        };

        $form->update([
            'total' => $total,
        ]);
        
        session()->forget(['name', 'address', 'date', 'phone', 'menu']);
        
        $orderData = [
            'name' => $request->user()->name,
            'order_id' => $form->order_id,
            'total' => $total,
        ];

        Mail::to($request->user()->email)->send(new OrderCreated($orderData));
        return redirect(route('shopThxGet'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    public function update(Request $request)
    {

        $request->validate([
            'qty' => 'required|min:1|numeric',
            'cart_id' => 'required|exists:carts,id|numeric',
        ]);

        // $cart = Cart::where('user_id',$request->user()->id)->where('product_id',$request->product_id);
        $cart = Cart::find($request->cart_id);
        $updateCart = $cart->update([
            'qty' => $request->qty,
            //  'user_id'=>$request->user()->id,
        ]);

        return (object)[
            'code' => $updateCart ? 1 : 0,
            'price' => ($cart->product_withTrashed?->price ?? 0) * $cart->qty,
        ];
    }

    public function deleteCart(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id',
        ]);

        $cart = Cart::find($request->cart_id)->delete();
        
        $carts = Cart::where('user_id', $request->user()->id)->get();

        $total = 0;
        foreach ($carts as $value) {
            $total += $value->product_withTrashed->price * $value->qty;
        }
        return (object)[
            'code' => $cart ? 1 : 0,
            'id' => $request->cart_id,
            'total' => $total,
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function orderdetails(Request $request)
    {
        
        $itembuys = Cart::where('user_id', $request->user()->id)->get();
        session()->forget('total');
        session()->put('total', $request->total);
        $total = $request->total;
        return view('shopprocess.orderdetails', compact('itembuys', 'total'));
    }

    public function deliver()
    {
        $hasBeen = session()->all();

        return view('shopprocess.deliver', compact('hasBeen'));
    }

    public function money()
    {
        return view('shopprocess.money');
    }
    
    public function thx()
    {
        return view('shopprocess.thx');
    }
    public function ordercheck(Request $request)
    {
        // $orderResult = OrderForm::where('user_id',$request->user()->id)->get();
        // $latestOrder = OrderForm::orderBy('created_at', 'desc')->first();
        // $latestOrder_id = $latestOrder->id;

        // $itembuys = Cart::where('user_id',$request->user()->id)->get();
        // foreach ($itembuys as $itembuy){
        //     ProductOrder::create([
        //         'form_id' =>$latestOrder_id,
        //         'product_id' =>$itembuy->product_id,
        //         'qty' =>$itembuy->qty,
        //         'price' =>$itembuy->product_withTrashed->price,
        //     ]);
        // }

        // $request->session()->forget('name');
        // $request->session()->forget('address');
        // $request->session()->forget('date');
        // $request->session()->forget('phone');
        // $request->session()->forget('menu');
        // $request->session()->forget('total');
        // $request->session()->forget('pay');






        // return view('shopprocess.ordercheck',compact('orderResult','itembuys'));
    }
}
