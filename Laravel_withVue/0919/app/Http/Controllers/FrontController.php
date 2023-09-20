<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function home()
    {
        $product = Product::orderBy('id', 'desc')->where('public',1)->get();

        return Inertia::render('Frontend/Index',[
            'response' => rtFormat($product),
        ]);
    }
}
