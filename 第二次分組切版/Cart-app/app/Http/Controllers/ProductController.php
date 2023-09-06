<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\FileService;

class ProductController extends Controller
{
    // protected $FileService;
    // public function __construct(FileService $FileService)
    // {
    //     $this->FileService = $FileService;
    // }

    public function __construct(protected FileService $fileService)
    {
    }

    //
    public function index()
    {
        $products = Product::get();
        return view('product.index',compact('products'));
    }
    public function create()
    {
        return view('product.addcartlist');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('product.editcartlist',compact('product'));
    }
    public function store(Request $request)
    {
        // 方法1使用Storage
        // $path = Storage::putFile('public/upload', $request->file('img_path'));
        // 方法2使用fileService
        $path = $this->fileService->imgUpload($request->file('image'),'product-img_path');

        // $path = Storage::putFile('public/upload', $request->file('img_path'));
        // dd($request->all());
        // return view('product.store');
        Product::create([
            'name'=> $request->name,
            // 'img_path'=> str_replace('public','storage',$path) ,
            'img_path'=> $path ,
            'price'=> $request->price,
            'status'=> $request->status,
            'describe'=> $request->describe,
        ]);
        return redirect(route('product.index'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        // dd($request->all());
        // if ($request->file('img_path')) {
        //     $path = Storage::putFile('public/upload', $request->file('img_path'));
        //     Storage::delete(str_replace('storage','public',$product->img_path));
        //     $product->update([
        //         'name'=> $request->name,
        //         'price'=> $request->price,
        //         'status'=> $request->status,
        //         'describe'=> $request->describe,
        //         'img_path'=> str_replace('public','storage', $path),
        //     ]);
        // }else{
        //     $product->update([
        //         'name'=> $request->name,
        //         'price'=> $request->price,
        //         'status'=> $request->status,
        //         'describe'=> $request->describe,
        //     ]);

        // }
        if ($request->file('img_path')) {
            # code...
            $path = $this->fileService->imgUpload($request->file('img_path'),'product-img_path');
            $this->fileService->deleteUpload($product->img_path);
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'desc' => $request->desc,
                'img_path' => $path,
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'desc' => $request->desc,
            ]);
        }
        return redirect(route('product.index'));
    }
    public function delete($id)
    {
        $product = Product::find($id)->delete();
        $this->fileService->deleteUpload($product->img_path);
        $product->delete();
        return redirect(route('product.index'));
    }
}
