<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\FileService;
use Illuminate\Http\Request;
use Inertia\Inertia;
use PhpParser\Node\Expr\Cast\Object_;

class ProductController extends Controller
{
    public function __construct(protected FileService $fileService)
    {
        
    }
    //
    public function index()
    {
        $products = Product::orderBy('id','desc')->get()->map(function($item) {
            $item->timeFormat = $item->created_at->format('Y/m/d');
            return $item;
        });

        return Inertia::render('Backend/Product/Index', [ 'response' => rtFormat($products) ]);
    }

    public function product_create()
    {
        return Inertia::render('Backend/Product/CreateProduct');
    }

    public function product_store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|string',
            'price' => 'required|min:0',
            'public' => 'required|numeric',
            'desc' => 'max:255',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'img_path' => $this->fileService->base64Upload($request->image, 'product'),
            'price' => $request->price,
            'public' => $request->public,
            'desc' => $request->desc,
        ]);

        return back()->with(['message' => rtFormat($product)]);
    }
    
    public function product_delete(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:products,id',
        ]);

        $product = Product::find($request->id);
        $this->fileService->deleteUpload($product->img_path);
        $product->delete();

        return back()->with(['message' => rtFormat($product)]);
    }

    public function product_edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect(route('product.list'))->with(['message' => rtFormat($id, 0, '沒這筆啦')]);
        }
        return Inertia::render('Backend/Product/EditProduct', [ 'response' => rtFormat($product) ]);
    }
    public function product_update(Request $request)
    {
        $request->validate([
            'formData.name' => 'required|max:255|string',
            'formData.price' => 'required|min:0|numeric',
            'formData.public' => 'required|numeric',
            'formData.desc' => 'max:255',
            'id' => 'required|exists:products,id',
        ],[
            'formData.name.required' => '商品名稱必填',
        ]);
        
        $product = Product::find($request->id);

        // $formData = (object)$request->formData;

        $product->update([
            'name' => $request->formData['name'],
            'price' => $request->formData['price'],
            'public' => $request->formData['public'],
            'desc' => $request->formData['desc'],
        ]);
        
        return back()->with(['message' => rtFormat($product)]);
    }
}
