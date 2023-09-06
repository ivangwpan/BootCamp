<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\ProductTypeImg;
use Illuminate\Http\Request;
use App\Services\FileService;

class TypeController extends Controller
{
    public function __construct(protected FileService $fileService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = ProductType::get();
        // 若使用Laravel+Vue要使用
        // $typesImg = ProductTypeImg::with()->first();
        // $typesImg = ProductTypeImg::first();
        // dd($types->productTypeImg);
        return view('product_type.typeList',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_type.addTypeList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = ProductType::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        foreach ($request->image ?? [] as $value) {
            ProductTypeImg::create([
                'img_path' => $this->fileService->imgUpload($value, 'type-image'),
                'product_type_id' => $type->id,
            ]);
        }
        return redirect(route('type.index'));
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
    public function edit($id)
    {
        // dd($id);
        $type = ProductType::find($id);
        return view('product_type.editTypeList',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request->hasFile('image'));
        $type = ProductType::find($id);
        $type->update([
            'name'=>$request->name,
            'desc'=>$request->desc,
        ]);
        if ($request->hasFile('image')) {
            foreach ($type->productTypeImg ?? [] as $value) {
                $this->fileService->deleteUpload($value->img_path);
                $value->delete();
                # code...
            }
            foreach ($request->image ?? [] as $value) {
                ProductTypeImg::create([
                    'img_path' => $this->fileService->imgUpload($value, 'type-image'),
                    'product_type_id' => $id,
                ]);
            }
        }
        return redirect(route('type.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //刪除資料功能
        $type = ProductType::find($id);
        
        foreach ($type->productTypeImg ?? []  as $value) {
            # code...
            $this->fileService->deleteUpload($value->img_path);
            $value->delete();
        }
        $type->delete();

        return redirect(route('type.index'));
    }
}
