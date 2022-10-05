<?php

namespace Modules\ProductsGallery\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Categories;
use App\Models\Postimage;
use App\Models\Products;
use App\Models\ProductsGallery;

class ProductsGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $productsgallery = ProductsGallery::all();

        $search = $request['search'] ?? "";
        if($search != "") {
            $productsgallery = ProductsGallery::where('title', 'LIKE', "%$search%")->paginate(5);
        } else{
            $productsgallery = ProductsGallery::paginate(5);
        }

        return view('productsgallery::productsgallery.view', compact('productsgallery'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $products = Products::all();
        return view('productsgallery::productsgallery.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path().'/img', $filename);
            $data['image']= $filename;
        }
        
        $validated = $request->validate([
            'product_id' => 'required|',
            'title' => 'required|unique:categories|max:255',
            'description' => 'required',
            'money' => 'required|min:0',
        ]);

        
        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        ProductsGallery::create($data);
        return redirect('/productsgallery')->with('thongbao', 'Success create');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('productsgallery::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $productsgallery = ProductsGallery::findOrFail($id);
        
        return view('productsgallery::productsgallery.edit', compact('productsgallery'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $productsgallery = ProductsGallery::findOrFail($id);

        $data = $request->all();

        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);


        $productsgallery->update($data);
        return redirect('/productsgallery')->with('thongbao', 'Success update');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $productsgallery = ProductsGallery::findOrFail($id);

        $productsgallery->delete();
        return redirect('/productsgallery')->with('thongbao', 'Success delete');
    }

}
